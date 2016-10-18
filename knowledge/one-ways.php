<?php
$title = 'One-Way Streets & Systems';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>


<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">One Way Streets</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="page-header"><h1>One Way Systems</h1></div>
            <p class="top-buffer20"></p>


            <div class="row top-buffer40"><!--nested row-->	
                <div class="col-xs-4">
                    <figure id="figr-1">
                        <img class="img-responsive center-block" src="../img/road_signs/blue_one_way.png" alt="one way street" id="one_way">
                        <script>
                            $('#figr-1 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-1').append('<figcaption>One way street</figcaption>');
                                    });
                        </script>
                    </figure>
                </div>
                <div class="col-xs-4">
                    <figure id="figr-2">
                        <img class="img-responsive center-block" src="../img/road_signs/circle_no_entry.png" alt="no entry">
                        <script>
                            $('#figr-2 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-2').append('<figcaption>No entry</figcaption');
                                    });
                        </script>
                    </figure>
                </div>
                <div class="col-xs-4">
                    <figure id="figr-3">
                        <img class="img-responsive center-block" src="../img/road_signs/circle_no_cars.png" alt="no cars">
                        <script>
                            $('#figr-3 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-3').append('<figcaption>No cars allowed</figcaption');
                                    });
                        </script>
                </div><!--nested column-->
            </div>	<!--nested row-->
        </div><!--column-->
    </div><!--row-->


    <div class="row">
        <div class="col-sm-6 top-buffer40">
            <div class="h-code">
                <h2>Highway Code Rule 143</h2>
                <img src="../img/road_signs/blue_direction_left.png" alt="go left" class="pull-right">
                <p>One-way streets. Traffic MUST travel in the direction indicated by signs. Buses and/or cycles may have a contraflow lane. Choose the correct lane for your exit as soon as you can. Do not change lanes suddenly. Unless road signs or markings indicate otherwise, you should use</p>
                <ul><li>
                        the left-hand lane when going left</li>
                    <li>the right-hand lane when going right</li>
                    <li>the most appropriate lane when going straight ahead.</li>
                </ul>
                <p>
                    Remember – traffic could be passing on both sides.</p>
            </div><!--h-code-->
        </div>


        <div class="col-sm-6 top-buffer40">
            <div class="i-box">
                <figure id="figr-5">
                    <img src="../img/graphics/green_no_right_turn_roundabout.png" alt="no right turn go round roundabout" class="center-block img-responsive">
                </figure>
                <script>
                    $('#figr-5 img')
                            .mouseover(function () {
                                $(this).css('cursor', 'pointer');
                            })
                            .one('click', function () {
                                $('#figr-5').append('<figcaption>Where a turning movement is prohibited, signs may show an alternative route</figcaption>');
                            });
                </script>
            </div>

            <div class="i-box top-buffer20">
                <figure id="figr-4">
                    <img src="../img/graphics/graphic_road_marking_one_way.png" alt="graphic road marking one way" class="img-responsive center-block">
                </figure>
                <script>
                    $('#figr-4 img')
                            .mouseover(function () {
                                $(this).css('cursor', 'pointer');
                            })
                            .one('click', function () {
                                $('#figr-4').append('<figcaption>Appropriate traffic lanes for particular destinations</figcaption>');
                            });
                </script>
            </div>
        </div>
    </div>
</div>
    <?php require_once '../includes/footer.php'; ?>
</body>
</html>