<?php
session_start();
//members home

$title = 'Bends';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>


<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Bends</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header"><h1>Bends</h1></div>


            <div class="row"><!--nested row-->	
                <div class="col-xs-4">
                    <figure id="figr-1">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_junction_on_inside_right_bend.png" alt="left bend">
                        <script>
                            $('#figr-1 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-1').append('<figcaption>Warning: Junction on Bend</figcaption>');
                                    });
                        </script>
                    </figure>
                </div>

                <div class="col-xs-4">
                    <figure id="figr-2">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_double_bend.png" alt="junction on bend">
                        <script>
                            $('#figr-2 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-2').append('<figcaption>Warning! Double Bend</figcaption');
                                    });
                        </script>
                    </figure>
                </div>


                <div class="col-xs-4">
                    <figure id="figr-4">
                        <img src="../img/road_signs/warning_junction_on_outside_right_bend.png"  class="img-responsive center-block" alt="Junction on Bend">
                    </figure>
                    <script>
                        $('#figr-4 img')
                                .mouseover(function () {
                                    $(this).css('cursor', 'pointer');
                                })
                                .one('click', function () {
                                    $('#figr-4').append('<figcaption>Warning: Junction on Bend</figcaption');
                                });
                    </script>
                </div><!--nested column-->
            </div>	<!--nested row-->
        </div><!--column-->
    </div><!--row-->


    <div class="row">
        <div class="col-sm-6 top-buffer40">

            <div class="h-code clearfix well">
                
                <h3>Highway Code Rule 166</h3>


                <figure id="figr-5" style="display:inline-block" class="pull-right">
                    <img src="../img/road_signs/no_overtaking.png"  class="img-responsive" style="vertical-align:top" alt="No overtaking">
                    <script>
                        $('#figr-5 img')
                                .mouseover(function () {
                                    $(this).css('cursor', 'pointer');
                                })
                                .one('click', function () {
                                    $('#figr-5').append('<figcaption style="text-align:center;">No Overtaking</figcaption>');
                                });

                    </script>

                </figure>


                <p>DO NOT overtake if there is any doubt, or where you cannot see far enough ahead to be sure it is safe. For example, when you are approaching:</p>
                <ul>
                    <li>a corner or <strong>bend</strong></li>
                    <li>a hump bridge</li>
                    <li>the brow of a hill</li>
                </ul>
            </div>


            <div class="i-box clearfix well">
                <img src="../img/road_signs/warning_right_bend.png" alt="right bend" class="pull-right img-margin img-responsive">

                <h3>Camber</h3>
                <p>The camber of a road is the angle at which the road 
                    normally slopes away from the centre to help drainage.</p>
                <h3>Adverse camber</h3>

                <img src="../img/road_signs/adverse_camber.png" alt="adverse camber" class="pull-right img-margin img-responsive">
                <p>Here the road slopes downwards towards the outside of the corner and the forces acting on your vehicle could cause it to leave the road more easily than on a normal corner.</p>
            </div>

        </div>


        <div class="col-sm-6 top-buffer40">

            <div class="e-skills clearfix well">

                <h2>Positioning on bends</h2>
                <img src="../img/road_signs/chevron.png" alt="chevron" class="pull-right img-margin img-responsive">
                <h3>Left-hand bends</h3>
                <p>Keep to the centre of your lane as you approach.</p>
                <p>Don't move to the centre of the road to improve your view round the bend. This could put you too close to oncoming traffic and a vehicle coming the other way might be taking the bend wide.</p>
                <h3>Right-hand bends</h3>
                <p>Keep to the left to improve your view of the road, but don't let a clear fiew tempt you to enter the bend at too great a speed.</p>
                <p class="em">Driving: The Essential Skills pg 130</p>
            </div>
            <div class="e-skills well">
                <p>The secret of dealing with bends is to make sure that</p>
                <ul>
                    <li>your speed is at its lowest before you start the turn</li>
                    <li>you use the accelerator so that the engine is doing just enough work to drive the vehicle round the bend without going faster.</li>
                </ul>
                <p>Too much acceleration can cause the wheels to lose their grip and skid, resulting in the vehicle swinging off course. This is particularly true on rear-wheel drive vehicles.</p>
                <p>Only increase your speed after you have straightened as you leave the bend.</p>
                <p>Make sure you select the correct gear before you enter the bend. You need both hands on the steering wheel as you're turning</p>
                <p class="em">Driving: The Essential Skills pg 134</p>
            </div>

        </div>
    </div>
</div>

<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>