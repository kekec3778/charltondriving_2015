
	  var myContent = 'My content goes here';
	  
      function initialize() {
		// get the element within which to place map, becomes first arg to Map() constructor
        var mapCanvas = document.getElementById('map');
		// map options, second arg to Map() constructor
        var mapOptions = {
          center: new google.maps.LatLng(51.447178, 0.077163),
          zoom: 11,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
        }
		// instantiate map object with map constructor
        var map = new google.maps.Map(mapCanvas, mapOptions);
		// add markers
		var myPosition = new google.maps.LatLng(51.447178, 0.077163);
		var marker = new google.maps.Marker({
			position: myPosition,
			map: map,
			icon: 'img/logos/logo_straight_xs.png',
			info: myContent
		});
		
		//infowindow
		var infowindow = new google.maps.InfoWindow({ content: myContent});
		//listener
		google.maps.event.addListener( marker, 'click', function() {
			infowindow.setContent(this.info);
			infowindow.open(map, this);
		});
		
      }// end initialize
	  
	  // load map on page load
      google.maps.event.addDomListener(window, 'load', initialize);
