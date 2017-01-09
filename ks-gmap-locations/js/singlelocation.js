var gmapObj
var gmapPage = function () {
    return {
        ui:{
        	locContainer: '.gmapContainer', //where the coordinate attributes are stored
        	locTitle:'#gmapTitle', //ID of the gmap title
        	map: '#map', //map ID
        },
        map: "",
    	//Basic Map
        initMap: function () {
			var map;
			jQuery(document).ready(function(){
				gmapObj=gmapPage;
				
				var lat = jQuery(gmapObj.ui.locContainer).attr('lat');
				var lng = jQuery(gmapObj.ui.locContainer).attr('lng');
				var title = jQuery(gmapObj.ui.locTitle).html();
				
				gmapObj.map = new GMaps({
					div: gmapObj.ui.map,
					scrollwheel: false,				
					lat: lat,
					lng: lng,
				});
			  
				var marker = gmapObj.map.addMarker({
					lat: lat,
					lng: lng,
					title: title,
					icon: "/wp-content/themes/bar-burrito/plugins/gmap/marker_loc.png",
				});
				
				
				//map styles
				var styles = globalObj.mapstyle; // stored in global.js
		
				gmapObj.map.addStyle({
					styledMapName:"Styled Map",
					styles: styles,
					mapTypeId: "map_style"
				});
		
				gmapObj.map.setStyle("map_style");
			});
        }
    };
}();

gmapPage.initMap();