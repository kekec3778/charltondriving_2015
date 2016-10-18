<?php
$title = 'Level Crossings';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Level Crossings</li>
</ol>
<div class="container">
    <div class="page-header">
        <h1>Level Crossings</h1>
    </div>


    <div class="row">

        <div class="col-xs-4">
            <figure id="figr-1">             
                <img src="../img/road_signs/warning_level_crossing_barrier.png" alt="level
                     crossing without barrier" class="img-responsive center-block" id="img-1">         
            </figure>         
            <script>
                $('#img-1')
                        .mouseover(function () {
                            $(this).css('cursor', 'pointer');
                        })
                        .one('click',
                                function () {
                                    $('#figr-1').append('<figcaption>Warning:<br>Level crossing WITH barrier ahead</figcaption>');
                                });
            </script>         
        </div>

        <div class="col-xs-4">
            <figure id="figr-2">
                <img src="../img/road_signs/warning_level_crossing_no_barrier.png" alt="level crossing WITH barrier" class="img-responsive  center-block">
            </figure>
            <script>
                $('#figr-2 img')
                        .mouseover(function () {
                            $(this).css('cursor', 'pointer');
                        })
                        .one('click',
                                function () {
                                    $('#figr-2').append('<figcaption>Warning:<br>Level crossing WITHOUT barrier ahead</figcaption>');
                                });
            </script>     
            </script>
        </div>

        <div class="col-xs-4">
            <figure id="figr-3">
                <img src="../img/road_signs/warning_overhead_cables.png" alt="overhead cables" class="img-responsive center-block">
            </figure>
            <script>
                $('#figr-3 img')
                        .mouseover(function () {
                            $(this).css('cursor', 'pointer');
                        })
                        .one('click',
                                function () {
                                    $('#figr-3').append('<figcaption>Warning:<br>Overhead cables</figcaption>');
                                });
            </script>     
            </script>
        </div>

    </div>
    <hr>
    <div class="row top-buffer20">         
        <div class="col-sm-6 top-buffer20">             
            <div class="h-code clearfix well">                 
                <h2>Highway Code Rule 291</h2>
                <img src="../img/road_signs/level_crossing.gif" alt="level crossing" class="img-thumbnail pull-right img-margin" style="width:100px;height:118px;">
                <p>A level crossing is where a road crosses a railway or tramway line.
                    Approach and cross it with care. Never drive onto a crossing until the
                    road is clear on the other side and do not get too close to the car in
                    front. Never stop or park on, or near, a crossing</p>
            </div>    

            <div class="e-skills clearfix well">
                <h3>Incidents or breakdowns</h3>
                <img src="../img/road_signs/level_crossing_tel.png" alt="telephone" class="pull-right img-margin">
                <p>If your vehicle breaks down, or you're involved in an incident on the crossing:</p>
                <ul>
                    <li>get everyone out of the vehicle and clear of the crossing</li>
                    <li>if there's a railway telephone, use it <strong>immediately</strong> to inform the signal operator: follow any instructions you're given</li>
                    <li>if there's time before a train arrives, move the vehicle clear of the crossing. You may be able to do this by putting it in first gear and then using the starter motor. Beware of the engine starting suddenly</li>
                    <li>if the alarm sounds, or the amber light comes on, <strong>get clear of the crossing at once - the train will not be able to stop.</strong></li>
                </ul>
                <p class="em">Driving - The essential skills - p 121</p>
            </div>
        </div>  
        <div class="col-sm-6 top-buffer20 well">
            <h2>Open crossings</h2>
            <p>Open level crossings are much less common. They have neither lights nor barriers. Look both ways, listen carefully and proceed when it is safe to do so. </p>
            <figure id="figr-4">
                <img src="../img/road_signs/open_level_crossing.png" alt="open level crossing" class="img-responsive center-block top-buffer20">
            </figure>
            <script>
                $('#figr-4 img')
                        .mouseover(function () {
                            $(this).css('cursor', 'pointer');
                        })
                        .one('click', function () {
                            $('#figr-4').append('<figcaption>Open level crossing</figcaption>');
                        });
            </script>
            <hr>
            <div class="text-center well" id="countdown_markers">
                <figure id="figr-cd3">
                    <img src="../img/road_signs/level_crossing_countdown_3.png" alt="300 yards to level crossing">
                </figure>
                <figure id="figr-cd2">
                    <img src="../img/road_signs/level_crossing_countdown_2.png" alt="200 yards to level crossing">
                </figure>
                <figure id="figr-cd1">
                    <img src="../img/road_signs/level_crossing_countdown_1.png" alt="100 yards to level crossing">
                </figure>
                <script>
                    $('#figr-cd3 img')
                            .mouseover(function () {
                                $(this).css('cursor', 'pointer');
                            })
                            .one('click', function () {
                                var alt = $(this).attr('alt');
                                $('#figr-cd3').append('<figcaption>' + alt + '</figcaption>');
                            });

                    $('#figr-cd2 img')
                            .mouseover(function () {
                                $(this).css('cursor', 'pointer');
                            })
                            .one('click', function () {
                                var alt = $(this).attr('alt');
                                $('#figr-cd2').append('<figcaption>' + alt + '</figcaption>');
                            });

                    $('#figr-cd1 img')
                            .mouseover(function () {
                                $(this).css('cursor', 'pointer');
                            })
                            .one('click', function () {
                                var alt = $(this).attr('alt');
                                $('#figr-cd1').append('<figcaption>' + alt + '</figcaption>');
                            });
                </script>
            </div>
        </div>       
    </div> 
    <div class="block"></div>    
</div> 
</div><!--container--> 
<?php require_once '../includes/footer.php'; ?> </body>
</html>
