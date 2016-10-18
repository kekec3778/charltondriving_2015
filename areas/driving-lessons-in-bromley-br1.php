<?php
session_start();
$title = 'Driving Lessons in Bromley - BR1';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Areas</li>
    <li class="active">Driving Lessons in Bromley</li>
</ol>
<div class="container">
    <div class="page-header"><h1>Driving Tuition in Bromley</h1></div>
    <div class="row">

        <div class="col-md-6">
            <div class="well">
                <p>I offer driver training in Bromley and Sundridge Park. I work in these areas Monday-Thursday, and Saturdays.</p>
                <p>For further information please email: <a href="mailto:neil@charltondriving.com">neil@charltondriving.com</a>, <span style="white-space:nowrap">or Call/Text <a href="tel:07917042740">07917 042 740</a></span>.</p><p>If I don't answer the phone I'm probably working. Please leave a voicemail and I will call back as soon as I can.</p>
                <img src="../img/road_signs/pedestrian-zone.png" alt="driver tuition in bromley" class="center-block img-responsive">
                <br>
                <br>
            </div>
        </div>

        <div class="col-md-6">
            <div id="map"></div>
        </div>
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: new google.maps.LatLng(51.410699, 0.018601),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php require_once '../includes/footer.php'; ?>