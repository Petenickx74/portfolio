jQuery(function($){

	var longitude = 37.773972;
	var latitude = -122.431297;
	var canvas = "map";

	
	function randing_map(canvas, lan, lat){			
			var myLatlng = new google.maps.LatLng(lan,lat);
			var myOptions = {
						zoom: 13,
						center: myLatlng,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						maxZoom   : 20,
    					disableDefaultUI: true
					}			
			var map = new google.maps.Map( document.getElementById(canvas), myOptions );
			var marker = new google.maps.Marker({
			    position : myLatlng,
			    map      : map,
			    icon     : "img/point.png"
			});
			var styles = [
			  {
			    featureType: "all",
			    stylers: [
			      { saturation: -80 }
			    ]
			  },{
			    featureType: "road.arterial",
			    elementType: "geometry",
			    stylers: [
			      { hue: "#00ffee" },
			      { saturation: 50 }
			    ]
			  },{
			    featureType: "poi.business",
			    elementType: "labels",
			    stylers: [
			      { visibility: "off" }
			    ]
			  }
			];	
			var infowindow = new google.maps.InfoWindow({
				content:"<div class='map_email'><div class='text'><span class='text'>Located in the heart of SF</span></div><div class='map_email'><span class='email'>Email : </span>peternickell@gmail.com</div> <div class='map_tel'><span class='tel'>Phone : </span>(207) 423-4249</div></div>"
			});	
			
			map.setOptions({styles: styles});

			google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map,marker);
			});
	}
	randing_map(canvas, longitude, latitude);

});
