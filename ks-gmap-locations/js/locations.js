var gmapObj
var gmapPage = function () {
	return {
		ui: {
			locContainer: '.location', //where the coordinate attributes are stored
			map: '#map', //map ID
			infoMarkerLink: '.infowindow',
		},
		mapBounds: [],
		map: "",
		//Basic Map
		initMap: function () {
			var map;
			jQuery(document).ready(function () {
				gmapObj = gmapPage;

				gmapObj.map = new GMaps({
					div: gmapObj.ui.map,
					scrollwheel: false
				});

				jQuery(gmapObj.ui.locContainer).each(function () {
					var lat = jQuery(this).attr('lat');
					var lng = jQuery(this).attr('lng');
					var title = jQuery('h3', this).text();
					var marker = icoF;

					var _clone_location_markup = jQuery(this).clone(true);

					//manipulate the data from the locations container.
					_clone_location_markup.find('.hidden').removeClass('hidden');
					_clone_location_markup.find('.fa-map-marker').remove();
					_clone_location_markup.removeClass('location col-md-3').addClass('infoWindowContainer');

					//add the markup for the infowindow.
					var infoCopy = jQuery('<div>').append(_clone_location_markup).html();

					locationGeoCode = new google.maps.LatLng(lat, lng); //locations object for bounds

					marker = gmapObj.map.addMarker({
						lat: lat,
						lng: lng,
						title: title,
						icon: marker,
						infoWindow: {
							content: infoCopy
						}
					});

					//append link
					//get the marker index for the showMarker function
					var markerIndex = gmapObj.map.markers.length - 1;
					jQuery(this).find('h3').append(' <a class="infowindow" href="#" mid="' + markerIndex + '"><i class="fa fa-map-marker" aria-hidden="true"></i></a>');

					gmapObj.mapBounds.push(locationGeoCode);
					gmapObj.map.fitLatLngBounds(gmapObj.mapBounds);
				});


				jQuery(document).on("click", gmapObj.ui.infoMarkerLink, function () {
					var markerID = jQuery(this).attr('mid');

					//Calls google maps event triger to show marker.
					google.maps.event.trigger(gmapObj.map.markers[markerID], 'click');

					return false;
				});
			});

		}, //initMap
	};

}();

gmapPage.initMap();