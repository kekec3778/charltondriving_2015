<?php
session_start();

//members home

$title = 'Dual Carriageways';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>


<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Dual Carriageways</li>
</ol>
<div class="container">
    <div class="row row-with-bottom-margin">
        <div class="col-sm-12">
            <div class="page-header"><h1>Dual Carriageways</h1></div>
            <p class="top-buffer20"></p>


            <div class="row top-buffer40"><!--nested row-->	
                <div class="col-xs-4">
                    <figure id="figr-1">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_traffic_merges_onto_carriageway.png" alt="warning traffic merges">
                        <script>
                            $('#figr-1 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-1').append('<figcaption>Warning: Traffic merges onto main carriageway</figcaption>');
                                    });
                        </script>
                    </figure>
                </div>

                <div class="col-xs-4">
                    <figure id="figr-2">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_end_of_dual_carriageway.png" alt="end of dual carriageway">
                        <script>
                            $('#figr-2 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-2').append('<figcaption>Warning! End of dual carriageway</figcaption');
                                    });
                        </script>
                    </figure>
                </div>


                <div class="col-xs-4">
                    <figure id="figr-4">
                        <img src="../img/road_signs/blue_direction_left.png"  class="img-responsive center-block" alt="must go left">
                        <script>
                            $('#figr-4 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-4').append('<figcaption>Go in direction shown</figcaption');
                                    });
                        </script>
                    </figure>

                </div><!--nested column-->
            </div>	<!--nested row-->
        </div><!--column-->
    </div><!--row-->


    <div class="row">
        <div class="col-sm-6 top-buffer40">
            <div class="e-skills well">


                <img src="../img/road_signs/blue_dual_carriageway_ahead.png"  class="pull-left img-margin" alt="dual carriageway ahead">


                <p>On a dual carriageway, lanes in one direction are separated from lanes in the other direction by a central reservation. There may be a safety barrier along this central reservation.</p>

                <p>Some dual carriageways are very similar to motorways, with slip roads to join and leave. However, motorway regulations do not apply and you may come across slow-moving traffic such as cyclists or farm tractors.</p>
                <p class="em">Driving - the essential skills - pg 177</p>
            </div>

            <div class="i-box clearfix well">
                <div class="i-box-quiz">
                    <h3>What is the National Speed Limit for cars on a Dual Carriageway?</h3>
                    <img src="../img/road_signs/circle_national_speed_limit.png" alt="national speed limit sign"  class="pull-right" id="figr-9">
                    <form role="form" id="quiz">
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="40"><span class="answers">40mph</span></label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="50"><span class="answers">50mph</span></label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="60"><span class="answers">60mph</span></label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="optradio" value="70"><span class="answers">70mph</span></label>
                        </div>
                        <button type="submit" class="btn btn-default btn-primary" id="submit">Submit</button>
                    </form>
                    <script>
                        $('#submit').click(function (e) {
                            e.preventDefault();
                            var checked = $(':checked').val();;
                            if (checked == '70') {
                                $('#answer').html('<p>Correct! The national speed limit for cars on dual carriageways is 70 miles per hour</p>');
                                $('#figr-9').attr('src', '../img/road_signs/circle_70.png');
                            } else if (checked == null) {
                                $('#answer').html('<p>Please choose</p>');
                            } else {
                                $('#answer').html('<p>Nope! That is not right.</p>');
                            }
                        });
                    </script>
                    <div id="answer" class="green top-buffer40"></div>
                </div><!--i box quiz-->

            </div>
        </div>


        <div class="col-sm-6 top-buffer40">
            <div class="h-code well">
                <h3>Highway code rules 137 &amp; 138</h3>
                <p>On a two-lane dual carriageway you should stay in the left-hand lane. Use the righthand lane for overtaking or turning right. After overtaking, move back to the left-hand lane when it is safe to do so.</p>

                <p>On a three-lane dual carriageway, you may use the middle lane or the right-hand lane to overtake but return to the middle and then the left-hand lane when it is safe.</p>
            </div>


            <div class="i-box well">
                <h3>Non-merging slip lanes</h3>
                <div class="row">
                    <div class="col-xs-4">
                        <figure id="figr-6">
                            <img id="merging_signs" src="../img/road_signs/sign_for_driver_on_slip_lane.png" alt="sign for driver on slip lane" class="img-responsive img-margin">
                            <script>
                                $('#figr-6 img')
                                        .mouseover(function () {
                                            $(this).css('cursor', 'pointer');
                                        })
                                        .one('click', function () {
                                            $('#figr-6').append('<figcaption>Non-primary route slip lane information sign</figcaption>');
                                        });
                            </script>
                        </figure>
                    </div>

                    <div class="col-xs-4">

                        <figure id="figr-7">
                            <img src="../img/road_signs/green_sign_for_driver_on_slip_lane.png" alt="primary route slip lane" class="img-responsive img-margin">
                        </figure>
                        <script>
                            $('#figr-7 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-7').append('<figcaption>Primary route slip lane information sign</figcaption>');
                                    });
                        </script>
                    </div>

                    <div class="col-xs-4">

                        <figure id="figr-8">
                            <img src="../img/road_signs/blue_sign_for_driver_on_slip_lane.png" alt="motorway slip lane" class="img-responsive img-margin">
                        </figure>
                        <script>
                            $('#figr-8 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-8').append('<figcaption>Motorway slip lane information sign</figcaption>');
                                    });
                        </script>
                    </div>

                </div>
                <p class="top-buffer20">Some slip lanes don't converge with the main carriageway immediately. This is generally much easier. The lane may, however, become a compulsory exit lane further along.</p>
            </div>
        </div>
    </div>
</div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>