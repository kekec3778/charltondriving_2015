<?php
session_start();
$title = 'Driving Lessons in Chislehurst BR7';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Areas</li>
    <li class="active">Driving Lessons in Chislehurst</li>
</ol>
<div class="container">
    <div class="page-header"><h1>Driving Tuition in Chislehurst and Elmstead Woods</h1></div>
    <div class="row">

        <div class="col-md-6">
            <div class="well">
            <p>I live and work in Chislehurst and Elmstead Woods, and all over South East London. If you live here I can offer you a small discount.</p>
            <p>For further information please email: <a href="mailto:neil@charltondriving.com">neil@charltondriving.com</a>, <span style="white-space:nowrap">or Call/Text <a href="tel:07917042740">07917 042 740</a></span>.</p><p>If I don't answer the phone I'm probably working. Please leave a voicemail or email.</p>
           
            <img src="../img/road_signs/wild-fowl.png" alt="driving lessons in chislehurst" class="center-block img-responsive">
            </div>
        </div>

        <div class="col-md-6">
            <div id="map"></div>
        </div>
    </div>

    <div class="block"></div>
</div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: new google.maps.LatLng(51.418966, 0.066853),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            draggable: false
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)

        var pinLocation = new google.maps.LatLng(51.421124, 0.054851);

        var content = "<strong>Neil\s Driving School - Chislehurst</strong>";
        content += "<br>Driving Lessons in South East London & Kent";
        content += "<br>";
        content += "<p>Please email <a href=\"mailto:neil@charltondriving.com\">neil@charltondriving.com</a><br> or call/text <a href=\"tel:07917042740\"> 07917 042 740</a> for more information</p>";

        var infowindow = new google.maps.InfoWindow({
            content: content
        });

        var marker = new google.maps.Marker({
            position: pinLocation,
            map: map,
            icon: '../img/logos/logo_straight_xs.png'
        });
        google.maps.event.addListener(marker, 'mouseover', function () {
            infowindow.open(map, marker);
        });


    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php require_once '../includes/footer.php'; ?>