<?php
session_start();

$title = 'Mini Roundabouts';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Mini Roundabouts</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header"><h1>Mini Roundabouts</h1></div>
            <p class="top-buffer20"></p>


            <div class="row top-buffer40"><!--nested row-->	
                <div class="col-xs-4">
                    <figure id="figr-1">
                        <img class="img-responsive center-block" src="../img/road_signs/mini_roundabout.png" alt="mini-roundabout">
                        <script>
                            $('#figr-1 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-1').append('<figcaption>Mini Roundabout</figcaption>');
                                    });
                        </script>
                    </figure>
                </div>

                <div class="col-xs-4">
                    <figure id="figr-2">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_roundabout.png" alt="warning roundabout">
                        <script>
                            $('#figr-2 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-2').append('<figcaption>Warning! Roundabout</figcaption');
                                    });
                        </script>
                    </figure>
                </div>


                <div class="col-xs-4">
                    <figure id="figr-4">
                        <img src="../img/road_signs/give_way.png"  class="img-responsive center-block" alt="give way">
                    </figure>
                    <script>
                        $('#figr-4 img')
                                .mouseover(function () {
                                    $(this).css('cursor', 'pointer');
                                })
                                .one('click', function () {
                                    $('#figr-4').append('<figcaption>Give Way</figcaption');
                                });
                    </script>
                </div><!--nested column-->
            </div>	<!--nested row-->
        </div><!--column-->
    </div><!--row-->


    <div class="row">
        <div class="col-sm-6 top-buffer40">

            <div class="h-code clearfix well">
                <h3>Highway Code Rule 188</h3>
                <img src="../img/road_signs/map_type_sign_mini_roundabout.png" alt="map type mini roundabout" class="pull-right img-responsive img-margin">

                <p>Mini-roundabouts. Approach these in the same way as normal roundabouts. All
                    vehicles MUST pass round the central markings except large vehicles which are
                    physically incapable of doing so. Remember, there is less space to manoeuvre and less
                    time to signal. Avoid making U-turns at mini-roundabouts. Beware of others doing this.</p>
            </div>
        </div>


        <div class="col-sm-6 top-buffer40">

            <div class="i-box clearfix well">



                <p>A mini-roundabout is normally found on a road with a speed limit of 30mph of less. It should be treated the same as a conventional roundabout. You must give way to traffic from the right, and keep to the left of the white circle unless the size of your vehicle or the junction layout makes driving over it unavoidable</p>

                <img src="../img/graphics/mini_roundabout_graphic.png" alt="mini-roundabout-graphic" class="center-block img-responsive">
            </div>
        </div>
    </div>
</div>

<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>