

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
        var map = new google.maps.Map(mapCanvas, mapOptions)
		
		
		
		var content = "<strong>Neil\s Driving School - Chislehurst</strong>";
		content += "<br>Driving Lessons in South East London & Kent";
		content += "<br>";
		content += "<p>Please email <a href=\"mailto:neil@charltondriving.com\">neil@charltondriving.com</a><br> or call/text <a href=\"tel:07917042740\"> 07917 042 740</a> for more information</p>";
		
		var infowindow1 = new google.maps.InfoWindow({
			content: content
		});
		var infowindow2 = new google.maps.InfoWindow({
			content: 'Hither Green Driving Test Centre'
		});
		var infowindow3 = new google.maps.InfoWindow({
			content: 'Sidcup Driving Driving Test Centre'
		});
		var infowindow4 = new google.maps.InfoWindow({
			content: 'West Wickham Driving Test Centre'
		});
		var infowindow5 = new google.maps.InfoWindow({
			content: 'Belvedere Driving Test Centre'
		});
		var infowindow6 = new google.maps.InfoWindow({
			content: 'Erith Driving Test Centre'
		});
		
		
		
		// neils driving school marker
		var myIcon = new google.maps.LatLng(51.421124, 0.054851);
		var marker = new google.maps.Marker({
			position: myIcon,
			map: map,
			icon: 'img/logos/logo_straight_xs.png'
		});
		google.maps.event.addListener(marker, 'click', function() {
			infowindow1.open(map, marker);
		});
		
		// hither green test center marker
		var hgtc = new google.maps.LatLng(51.452462, -0.003932);
		var hgtestcenter = new google.maps.Marker({
			position: hgtc,
			map: map
		});
		google.maps.event.addListener(hgtestcenter, 'click', function() {
			infowindow2.open(map, hgtestcenter);
		});
		
		// sidcup test center marker
		var sdtc = new google.maps.LatLng(51.419161, 0.122700);
		var stestcenter = new google.maps.Marker({
			position: sdtc,
			map: map
		});
		google.maps.event.addListener(stestcenter, 'click', function() {
			infowindow3.open(map, stestcenter);
		});
		
		// west wickham test center marker
		var wwdtc = new google.maps.LatLng(51.375080, -0.010980);
		var wwtestcenter = new google.maps.Marker({
			position: wwdtc,
			map: map
		});
		google.maps.event.addListener(wwtestcenter, 'click', function() {
			infowindow4.open(map, wwtestcenter);
		});
		
		// west wickham test center marker
		var bdtc = new google.maps.LatLng(51.483819, 0.142314);
		var btestcenter = new google.maps.Marker({
			position: bdtc,
			map: map
		});
		google.maps.event.addListener(btestcenter, 'click', function() {
			infowindow5.open(map, btestcenter);
		});
		
		
		// erith test center marker
		var edtc = new google.maps.LatLng(51.498414, 0.161922);
		var etestcenter = new google.maps.Marker({
			position: edtc,
			map: map
		});
		google.maps.event.addListener(etestcenter, 'click', function() {
			infowindow6.open(map, etestcenter);
		});
      }
	  
      google.maps.event.addDomListener(window, 'load', initialize);
