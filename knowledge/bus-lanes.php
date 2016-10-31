<?php
session_start();

//members home
$title = 'Bus Lanes';
require_once '../includes/head.php';
?>

<script>
    Image1 = new Image();
    Image1.src = "../img/road_signs/bus_lane_times_alternative.png";
    Image2 = new Image();
    Image2.src = '../img/road_signs/end_bus_lane_alternative.png';
</script>
<?php
require_once '../includes/nav.php';
?>


<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Bus Lanes</li>
</ol>
<div class="container">
    <div class="page-header"><h2>Bus Lanes</h2></div>
    <div class="row">
        <div class="col-sm-6">
            
            <div class="h-code clearfix well">
                <h3>Highway Code Rule 141</h3>
                <div id="bus-sign">
                    <figure>
                        <img src="../img/road_signs/bus_lane_times.png" alt="bus lanes" class="img-responsive img-margin pull-right" id="figr-1">
                    </figure>
                    <script>
                        $('#figr-1')
                                .mouseover(function () {
                                    $(this).attr('src', '../img/road_signs/bus_lane_times_alternative.png');
                                })
                                .mouseout(function () {
                                    $(this).attr('src', '../img/road_signs/bus_lane_times.png');
                                });
                    </script>
                </div>
                <p>Bus Lanes. These are shown by road markings and signs that indicate which (if any) other vehicles are permitted to use the bus lane. Unless otherwise indicated, you should not drive in a bus lane during its period of operation. You may enter a bus lane to stop, to load or unload where this is not prohibited</p>
            </div>

            <div class="e-skills well">
                <h3>Bus Lanes</h3>
                <p>Only vehicles shown on the sign may use the lane during the times of operation, which are also shown on the sign. Outside those periods all vehicles can use the bus lane. Where there are no times shown, the bus lane is in operation for 24 hours a day. Don't park or drive in bus lanes when they are in operation.</p>
                <p class="em">Driving - The essential skills - pg 111</p>
            </div>

            <div class="h-code clearfix well">
                <h3>Highway Code Rule 165</h3>
                <img src="../img/road_signs/end_bus_lane.png" alt="bus lane road markings" class="pull-right img-margin" id="figr-2">

                <p>You <span style="color:red;">MUST NOT</span> overtake if you would have to enter a lane reserved for buses, trams or cycles during its hours of operation.</p>


                <script>
                    $('#figr-2')
                            .mouseover(function () {
                                $(this).attr('src', '../img/road_signs/end_bus_lane_alternative.png');
                            })
                            .mouseout(function () {
                                $(this).attr('src', '../img/road_signs/end_bus_lane.png');
                            })
                </script>

            </div>




        </div>
        <div class="col-sm-6 text-center well">
            <h3>Bus Lane Videos</h3>
            <div class="center-block">
                <p><iframe width="320" height="240" src="http://www.youtube.com/embed/QGY2srATg84" frameborder="0" allowfullscreen></iframe><br />
                    Lee High Road Bus Lane</p>
                <p><iframe width="320" height="240" src="http://www.youtube.com/embed/1h7Ksy21rrM" frameborder="0" allowfullscreen></iframe><br />
                    Eltham Road Bus Lane</p>
                <p><iframe width="320" height="240" src="http://www.youtube.com/embed/Of3q5yVXdWk" frameborder="0" allowfullscreen></iframe><br />
                    Downham Way Bus Lane</p>
                <p><iframe width="320" height="240" src="http://www.youtube.com/embed/WUT8CQ6-1q4" frameborder="0" allowfullscreen></iframe><br />
                    Burnt Ash Road (Sainsbury's)</p>
                <p><iframe width="320" height="240" src="http://www.youtube.com/embed/XWMgtjtu8w4" frameborder="0" allowfullscreen></iframe><br />
                    Burnt Ash Road (South Circular Road)</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">

        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
</body>
</html>