<?php
session_start();

$title = 'Pedestrian Crossings';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>


<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Pedestrian Crossings</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="page-header"><h1>Pedestrian Crossings</h1></div>
            <p class="top-buffer20">There are several different types of pedestrian crossing: </p>
            <ul>
                <li><a href="#zebra">Zebra crossings</li>
                <li><a href="#pelican">Pelican crossings</li>
                <li><a href="#puffin">Puffin crossings</a></li>
                <li><a href="#toucan">Toucan crossings</a></li>
            </ul>

            <div class="row top-buffer40"><!--nested row-->	
                <div class="col-xs-4">
                    <figure id="figr-1">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_pedestrian_crossing.png" alt="pedestrian crossings" id="ped_cros">
                        <script>
                            $('#figr-1 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-1').append('<figcaption>Warning:<br> Pedestrian crossing ahead!</figcaption>');
                                    });
                        </script>
                    </figure>
                </div>
                <div class="col-xs-4">
                    <figure id="figr-2">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_frail_pedestrians.png" alt="frail pedestrians">
                        <script>
                            $('#figr-2 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-2').append('<figcaption>Warning:<br>Frail pedestrians crossing!</figcaption');
                                    });
                        </script>
                    </figure>
                </div>
                <div class="col-xs-4">
                    <figure id="figr-3">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_school_crossing.png" alt="school crossing">
                        <script>
                            $('#figr-3 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-3').append('<figcaption>Warning:<br> School crossing ahead!</figcaption');
                                    });
                        </script>
                </div><!--nested column-->
            </div>	<!--nested row-->
        </div><!--column-->
    </div><!--row-->


    <div class="row">
        <div class="col-sm-6 top-buffer40">
            <div class="h-code well">
                <h1 id="zebra">Highway Code Rule 195</h1>
                <img src="../img/snippings/graphic_zebra.PNG" alt="zebra crossings" class="pull-right img-margin">
                <p>As you approach a <span class="bg-warning">zebra crossing...</span></p>
                <ul>
                    <li>look out for pedestrians waiting to cross and be ready to slow down or stop to let them cross</li>
                    <li>you <span class="red">MUST</span> give way when a pedestrian has moved onto a crossing</li>
                    <li>allow more time for stopping on wet or icy roads</li>
                    <li>do not wave or use your horn to invite pedestrians across; this could be dangerous if another vehicle is approaching</li>
                    <li>be aware of pedestrians approaching from the side of the crossing</li>
                </ul>
                <p>A zebra crossing with a central island is two separate crossings</p>
            </div><!--h-code-->


            <div class="i-box well">
                <h2 id="pelican" class="yellow bg-black text-center"><span class="blink_me">P</span>elicans</h2>
                <script>
                    $(document).ready(function () {

                        function blinker() {
                            $('.blink_me').fadeOut(1000);
                            $('.blink_me').fadeIn(1000);
                        }
                        setInterval(blinker, 1700); //Runs every second
                    });//end ready

                </script>

                <p><img src="../img/graphics/pelican.gif" alt="pelican crossing" class="pull-left img-margin" style="width:50;height:105px;">
                    <span title="Pedestrian Light Control">PeLiCan</span> crossings are traffic lights which can be controlled by pedestrians</p>
                <p>These crossings have a flashing amber traffic light phase. If all pedestrians have finished crossing then you may go, even if the amber light is still flashing. Be sure to scan to the sides of the crossing before you proceed.</p>
            </div>


            <div class="i-box well">
                <h2 class="text-center" id="puffin">Puffins</h2>
                <img src="../img/graphics/standard_traffic_light.gif" alt="standard traffic light" class="img-margin pull-right" style="width:50;height:105px;">
                <p>Puffin stands for &ldquo;Pedestrian User Friendly&rdquo;. These crossings have features which make crossing the road easier for vulnerable road users. For example, there is a sensor on top of the traffic light which will hold the light on red until the pedestrian has finished crossing. </p>
                <p>Both Puffin and Toucan crossings have a standard traffic light phasing, as shown in the animation here</p>
            </div>

            <div class="i-box clearfix well">
                <h2 class="text-center" id="toucan">Toucans</h2>
                <img src="../img/snippings/graphic_toucan.png" alt="toucan crossing" class="pull-right img-margin">
                <p>Toucan, or &ldquo;Two-Can&rdquo; crossings are similar to Puffin crossings. They allow cyclists to cross without having to dismount.</p>
            </div>
        </div>

        <div class="col-sm-6 top-buffer40">
            <div class="e-skills well">
                <h2>The driver and crossings</h2>

                <p>Some rules and advice apply to all types of crossing.</p>
                <ul class="spaced_out_list">
                    <li>You must not park	
                        <ul>
                            <li>on a crossing; this blocks the way for pedestrians</li>
                            <li>within the area marked by zigzag lines; this obstructs both the pedestrian's view of approaching vehicles and an apporaching driver's view of the crossing.</li>
                        </ul>
                    </li>
                    <li>You must not overtake
                        <ul>
                            <li>the moving vehicle nearest to a crossing</li>
                            <li>the leading vehicle which has stopped to give way to a pedestrian.</li>
                        </ul>
                    </li>
                    <li>Even if there are no zigzag lines, never overtake just before a crossing.</li>
                    <li>Give yourself more time to stop if the road is wet or icy</li>
                    <li>Keep crossings clear when queuing in traffic, stopping before the crossing if you can see that you won't be able to clear it.</li>
                    <li>You should take extra care where the view of either side of a crossing is blocked by queueing traffic. pedestrians may be crossing between these vehicles, incorrectly thinking they have stopped to allow pedestrians to cross.</li>
                    <li>Always allow pedestrians plenty of time to cross, especially if they are older or disabled, and do not harass them by revving your engine or edging forward.</li>
                    <li>Watch out for pedestrians who try to rush across at the last minute</li>
                </ul>
                <p class="em">Driving - The essential skills - pg 149</p>
            </div>

            <div class="video well">
                <iframe width="300" height="169" src="https://www.youtube.com/embed/KCBeSOtEEBQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</div>
    <?php require_once '../includes/footer.php'; ?>
</body>
</html>