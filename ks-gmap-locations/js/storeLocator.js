var lMarker = locMarker;
var sMarker = srchMarker;

var locationObj; //set var for callback scope
var locations={
	
	/*Properties
	************************************/
	geocode:{
		current:{}, //browser
		locations:[], //list of locations
	},
	
	ui:{
		//form elements
		searchaddress:'yourAddressInput',
		searchaddressID:'#yourAddressInput',
		searchbtn:'#searchLocation',
		nearestbtn:'#nearest',
		
		//location list
		locationAnchorList:'#list .locationListContainer',
		searchResultsContainer:"#searchResults",
		searchResultsTitle:"#searchResultsTitle",
		mapcontainer:"#map",
		resultInfoWindowLink:".infowindow"
	},
	settings:{
		geoLocationWebService:"http://"+window.location.hostname + "/get/geolocation/", // /get/getlocation
		currentCoordinates:[],
		searchMarker: sMarker,
		locationMarker: lMarker,
		isBrowserLocationShared:"", //used to check for settimeout if user is using browers location share or require geo ip share
	},
	map:'',
	searchmap:{},
	mapBounds:[],
	
	/*functions
	************************************/
	
	initMap:function(lat, lng){
		
		//if map is not set
		if(this.map == ''){
			
			this.map = new GMaps({
				div: this.ui.mapcontainer,
				scrollwheel: false,
				lat:lat,
				lng:lng
			});
			//map styles
			var styles = globalObj.mapstyle; // stored in global.js
		
			this.map.addStyle({
				styledMapName:"Styled Map",
				styles: styles,
				mapTypeId: "map_style"
			});
		
			this.map.setStyle("map_style");

		}
	},//initMap
	
	showMarker:function(id){
	
		google.maps.event.trigger(this.map.markers[id], 'click');
	
	},//showMarker
	
	clearSearchResults:function(){
		//clear map bounds
		this.mapBounds=[];
		
		//clear objects
		this.geocode.locations=[];
		
		//clear map markers
		this.map.removeMarkers();
		
		//clear search results markup
		jQuery(this.ui.searchResultsContainer).html('');
		
	},//clearSearchResults
	
	noSearchResults:function(){
		//Clear Search
		this.clearSearchResults();
		
	},//clearSearchResults
		

	
	//search locations
	search:function(){

		var searchVal = jQuery(this.ui.searchaddressID).val();
		
		if(searchVal){
			GMaps.geocode({
				address: searchVal,
				callback: function(results, status){
					
					if (status == "OK") {
						
						var latlng = results[0].geometry.location;
						locationObj.parseResults(latlng.lat(), latlng.lng(),'search');
						
					}else{
					
					}
					
					
				}//call back
			});//gmaps	
		}else{

		}
				
	},//search
	
	nearest:function(){
		//reset isBrowserLocationShared to blank
		locationObj.settings.isBrowserLocationShared = '';
		
		//Trigger Browser GeoLocation
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(geoPosition, ajaxGetGeoIP); // if fails use ajaxGeoIP to get locations.
		} else {
			//if fails, Browser not Supported then call the IP GeoLocation.
			ajaxGetGeoIP();
		}
		
		/*********************
		Nearest Functions
			-geoPosition, if browser is successful then parse results
			-ajaxGetGeoIP, get GEO IP coordinates and parse results
			-handle_errors, debug function for error handling the Brower's Geolocation
			-setTimeout, since error handling doesn't work cross platform a 7 second setTimeout function is used to check if the Browers' Geolocation has been shared. if not then the IP Geolocation will be sent.
		**********************/
		
		//send coordinates for GEO Location
		function geoPosition(position){
			//set isBrowserLocationShared to shared
			locationObj.settings.isBrowserLocationShared = 'shared';
			
			//parse browser share location coordinates
			locationObj.parseResults(position.coords.latitude, position.coords.longitude,'geolocation');	
			//locationObj.parseResults(position.coords.latitude, position.coords.longitude, 'nearest');
		}
        
        function ajaxGetGeoIP(){
			//set isBrowserLocationShared to shared
			locationObj.settings.isBrowserLocationShared = 'geolocation IP';
			
			jQuery.ajax({
			method: "POST",
				url: locationObj.settings.geoLocationWebService,
				data: { getGeoLoc: true }
			})
			.done(function( msg ) {
				//get response
				locationObj.settings.currentCoordinates = JSON.parse(msg);
				//console.info('call: ajaxGetGeoIP');
				//if current location found then calculate the distance
				if(locationObj.settings.currentCoordinates['lat'] && locationObj.settings.currentCoordinates['lng']){
					//parse results
					locationObj.parseResults(locationObj.settings.currentCoordinates['lat'], locationObj.settings.currentCoordinates['lng'],'geolocation');															
				}else{
					//LOCATION UNKNOWN
					//console.info('Location unkown');
					jQuery(locationObj.ui.searchResultsContainer).append('<div class="col-lg-12">Sorry we cannot determine your location.</div>');
				}
			});//ajax call
        }
        
		//Error Handling, doesn't work in Firefox, used only for debugging
        function handle_errors(error){
            switch(error.code)
            {
                case error.PERMISSION_DENIED: alert("user did not share geolocation data");
                break;
 
                case error.POSITION_UNAVAILABLE: alert("could not detect current position");
                break;
 
                case error.TIMEOUT: alert("retrieving position timed out");
                break;
 
                default: alert("unknown error");
                break;
            }
        }
        
        //setTimeout to see if share location has been set after 7 seconds
        setTimeout(function(){ 
        	//console.info('check share location');
        	if(!locationObj.settings.isBrowserLocationShared){ //check if setting is blank
        		ajaxGetGeoIP();
        	}
        }, 7000); //7000 = 7 seconds

	},//nearest
	
	parseResults:function(lat, lng, parsetype){
		//parsetype: search, geolocation, nearest
		locationObj.initMap(lat, lng);
		
		//Clear Search
		locationObj.clearSearchResults();
	
		//current location GeoCode
		locationObj.geocode.current = new google.maps.LatLng(lat, lng);
		
		//add map bound
		locationObj.mapBounds.push(locationObj.geocode.current);	
				
		//loop through all the locations and set distance.
		jQuery(locationObj.ui.locationAnchorList).each(function(){
			//console.info(jQuery(this).attr('lat'));
			//console.info(jQuery(this).attr('lng'));
			
			//get the long and lat from the attr tags on the anchor
			var locationLat = jQuery(this).attr('lat')
			var locationLong = jQuery(this).attr('lng')
								
			if(locationLat && locationLong){
				//geocode object
				var locationGeoCode = new google.maps.LatLng(locationLat, locationLong);

				//get distance
				var thedistance = google.maps.geometry.spherical.computeDistanceBetween(locationObj.geocode.current, locationGeoCode)/1000;

				//push to array
				locationObj.geocode.locations.push({
					title:jQuery(this).html(),
					lat:locationLat,
					lng:locationLong,
					geocode:locationGeoCode,
					distance:thedistance,
					markup:jQuery(this)
				});
			
				//update the distance
				jQuery(this).find('.distance').html( thedistance.toFixed(2) + 'km');
			
			}
		});//each loop
	
		//sort the array by distance
		locationObj.geocode.locations.sort(locationObj.compare);
		
		if(locationObj.geocode.locations[0].distance > 250 && parsetype == 'geolocation'){

			//console.info('trigger a check for GPS or Browers location');
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function(position){
					//recall itself to get browser geocode.
					locationObj.parseResults(position.coords.latitude, position.coords.longitude, 'nearest');
				});
			} else { 
				jQuery(locationObj.ui.searchResultsContainer).append('<div class="col-lg-12">Geolocation is not supported by this browser.</div>');
			}
			
		}else{					
			//display results within 25KM
			for(i=0; i < locationObj.geocode.locations.length; i++){

				//25 is distance in KM
				if(locationObj.geocode.locations[i].distance.toFixed(2) > 25){
					break;
				}

				//clone element							
				_cloneLocation = locationObj.geocode.locations[i].markup.clone(true);
								
				//modify the distance
				_cloneLocation.find('.distance').html(locationObj.geocode.locations[i].distance.toFixed(2) + 'km');
				
				//clone for InfoWindow
				_cloneInfoWindow = _cloneLocation.clone(true);
				
				//add info window event
				_cloneLocation.find('.locationMeta').append(' <a href="#" class="infowindow" mid="'+ i +'"><i class="fa fa-info-circle"></i></a> ');
				
				_cloneInfoWindow.css({'width':'100%', 'min-width':'225px', 'min-height':'75px'});
				_cloneInfoWindow.find('.locationMeta').html('');
				_cloneInfoWindow.find('.setyourssbc').remove();
				var infoWindowLocationURL = _cloneInfoWindow.find('p a').attr('href');
				_cloneInfoWindow.append('<p><a href="' + infoWindowLocationURL + '" class="norwester text-uppercase">View Store Details<i class="fa fa-chevron-right"></i></a></p>')
				
				//create temp div
				var locationMarkup = jQuery('<div id="tempDiv">').append(_cloneLocation).html();
				var infoWindowMarkup = jQuery('<div id="tempDiv">').append(_cloneInfoWindow).html();
				

				//append div							
				jQuery(locationObj.ui.searchResultsContainer).append('<div class="col-md-4">'+ locationMarkup + '</div><div class="horizontalSpacer-sm margin-r10 margin-l10 margin-t20 margin-b20 hidden-lg hidden-md"></div>');
				
				if(i%3 == 2){
					jQuery(locationObj.ui.searchResultsContainer).append(
						'<div class="col-md-12"><hr /></div>'
					);
				}
				
				//clear temp div
				jQuery( "#tempDiv" ).remove();
				
				
				//add map bound
				locationObj.mapBounds.push(locationObj.geocode.locations[i].geocode);
					locationObj.settings.searchMarker
	
				var marker = locationObj.map.addMarker({
					lat: locationObj.geocode.locations[i].lat,
					lng: locationObj.geocode.locations[i].lng,
					title: locationObj.geocode.locations[i].title,
					icon: locationObj.settings.locationMarker,
					zIndex: 10,
					infoWindow: {
						content: infoWindowMarkup
					}
				});
				
			}//for
			
			//update total results
			jQuery(locationObj.ui.searchResultsTitle).html(i+' ');
			
			//add search marker
			var marker = locationObj.map.addMarker({
				lat: lat,
				lng: lng,
				title: 'Location',
				icon: locationObj.settings.searchMarker,
				zIndex: 100
			});
			
			//set map bounds
			locationObj.map.fitLatLngBounds(locationObj.mapBounds);
			
		}
	}, //parseResults
	
	//compare values to sort objects
	compare:function(a, b){
		if (a.distance < b.distance){
			return -1;
		}if (a.distance > b.distance){
			return 1;
		}
		return 0;
	},//compare
	
	init:function(){
		jQuery(document).ready(function($){
		
			//if a location hash exist trigger
			if(window.location.hash != "") {
				$('a[href="' + window.location.hash + '"]').click()
			}
			
			locationObj=locations;
			
			/*handlers
			************************************/		
			//search
			jQuery(document).on( "click", locationObj.ui.searchbtn, function(){
				//show the search tab
				jQuery(this).tab('show');
				
				//search
				locationObj.search();
				
				return false;
			});	
			
			//event handler for enter key press on search field
			$(locationObj.ui.searchaddressID).keypress(function(e) {
				//Enter key = 13
				if (e.which == 13) {
					//show the search tab
					jQuery(locationObj.ui.searchbtn).tab('show');
				
					//search
					locationObj.search();
				
					return false;
				}
			});
			
			//nearest location
			jQuery(document).on( "click", locationObj.ui.nearestbtn, function(){
				//clear search
				jQuery(locationObj.ui.searchaddressID).val('');
				
				//show the search tab
				jQuery(locationObj.ui.searchbtn).tab('show');
				
				//get nearest
				locationObj.nearest();
				
				return false;
			});
			
			jQuery(document).on( "click", locationObj.ui.resultInfoWindowLink, function(){
				
				locationObj.showMarker(jQuery(this).attr('mid'));
				
				return false;
			});
					

			//setup search autocomplete
			var searchInput = document.getElementById(locationObj.ui.searchaddress);
			var autocomplete = new google.maps.places.Autocomplete(searchInput);			
			
			if(jQuery(locationObj.ui.searchaddressID).val()){
			//check to see if there's a search value
				
				//trigger search event
				$(locationObj.ui.searchbtn).trigger( "click" );
			
			}else{
			//check for nearest location if no search results
				locationObj.nearest();
			}
			
		});//jQuery
	}//init
}

locations.init();