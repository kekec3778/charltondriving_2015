<?php
//members home
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: ../index.php?ref_mem');
} else {


    $title = 'Members Home Page';

    require_once '../includes/head.php';
    require_once '../includes/nav.php';
    ?>
    <!-- fb like button -->
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id))
                return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    <!-- fb like end -->
    <ol class="breadcrumb">
        <li><a href="../index.php">Home</a></li>
        <li class="active">My Driving</li>
    </ol>
    <div class="container">
        <div class="page-header"><h1>My Driving</h1></div>
        <div class="row">
            <div class="col-sm-6">
                <h3>Hello <?php echo ucfirst($_SESSION['name']); ?></h3>
                <p>From this page you can access your <a href="my-driving-lessons.php">driving lesson records</a>. Please log in every now and again and have a look at some of the videos and websites which are linked from here.</p>
                <hr>

                <!--my driving lesson-->	
                <div class="panel-group members_menu" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingZero">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
                                    My Driving Lessons
                                </a>
                            </h4>
                        </div>
                        <div id="collapseZero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingZero">
                            <div class="panel-body">
                                <ul class="simple_list">
                                    <li><a href="my-driving-lessons.php">Driving Lessons</a></li>
                                    <li><a href="my-progress.php">Progress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--driving instructor tv-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingDITV">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDITV" aria-expanded="false" aria-controls="collapseOne">
                                    Driving Instructor TV
                                </a>
                            </h4>
                        </div>
                        <div id="collapseDITV" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingDITV">
                            <div class="panel-body">
                                <p>All of my customers can use 'Driving Instructor TV' for free. I'll issue you with a password when you first start. If you haven't received one send me an email.</p>
                                <ul class="simple_list">

                                    <li><a target="_blank" href="https://www.driving-instructor.tv/library/learners"><img src="../img/logos/driving-instructor-tv-logo.jpg" alt="driving instructor tv logo"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>





                    <!--videos-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Videos
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <ul class="simple_list">
                                    <?php
                                    foreach ($videos as $video) {
                                        ?>
                                        <li><a target="_blank" href="<?php echo $video . '.php' ?>"><?php echo ucfirst($video); ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <!--end of videos-->



                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Driving Test Routes
                                </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">


                                <p>These are old test routes are from the Hither Green Test Centre. They vary slightly from current test routes, but are typical of the areas you'll be asked to drive in.</p>
                                <ul class="simple_list">
                                    <li><a href="test-routes/Hither_Green_Car_Routes_1-5.pdf">Hither Green Routes 1-5</a></li>
                                    <li><a href="test-routes/Hither_Green_Car_Routes_11-16.pdf">Hither Green Routes 11-16</a></li>
                                    <li><a href="test-routes/Hither_Green_Car_Routes_17-20.pdf">Hither Green Routes 17-20</a></li>
                                </ul>
                                <hr>

                                <p>These test routes are taken from the Old Sidcup Test Centre. They feature many of the same routes as the latest test routes.</p>
                                <ul class="simple_list">
                                    <li><a href="test-routes/Sidcup_Car_Routes_1-5.pdf">Sidcup Routes 1-5</a></li>
                                    <li><a href="test-routes/Sidcup_Car_Routes_6-10.pdf">Sidcup Routes 6-10</a></li>
                                    <li><a href="test-routes/Sidcup_Car_Routes_11-17.pdf">Sidcup Routes 11-17</a></li>
                                    <li><a href="test-routes/Sidcup_Car_Routes_18-19.pdf">Sidcup Routes 18-19</a></li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- theory-->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Theory Test Help
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <ul class="simple_list">
                                    <li><a href="http://theorytestpro.co.uk/">Theory Test Pro</a></li>
                                    <li><a href="http://www.safedrivingforlife.info/take-official-free-practice-driving-theory-test/car-practice-theory-tests/car-practice-test-one">Gov.uk Theory test</a></li>
                                    <li><a href="https://www.dvsalearningzone.co.uk/shop/car-theory">DVSA Learning Zone</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Useful Links
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <ul class="simple_list">
                                    <li><a href="http://smartdriving.co.uk/apps/index.php">SmartDriving</a></li>
                                    <li><a href="http://www.edrivingsolutions.com/">eDriving Solutions</a></li>
                                    <li><a href="http://www.gamesfreak.net/games/Parking-passion.html">Parking Game</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end of accordion -->	
                <!-- quiz-->

            </div>

            <div class="col-sm-6">


                <!-- quiz -->
                <div class="quizContainer well">

                    <!-- fb -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="fb-like pull-right" data-href="https://www.facebook.com/ndschislehurst" data-layout="button" data-action="like" data-show-faces="false" data-share="false">
                            </div>
                        </div>
                    </div>
                    <!-- end fb -->

                    <div id="question"></div>
                    <div id="myDiv">
                        <div id="results"><img></div>
                        <div id="ans">
                            <form id="form">
                                <table>
                                    <tr><td id="answer1"></td><td><input type="radio" name="answer" id="a1" checked></td></tr>
                                    <tr><td id="answer2"></td><td><input type="radio" name="answer" id="a2"></td></tr>
                                    <tr><td id="answer3"></td><td><input type="radio" name="answer" id="a3"></td></tr>
                                    <tr><td id="answer4"></td><td><input type="radio" name="answer" id="a4"></td></tr>
                                    <tr><td colspan="2"><input type="submit" id="submit" value="Answer"></td></tr>
                                </table>
                            </form>
                            <script>
                                $(window).on('load', function () {
                                    myImageQuiz();
                                });
                            </script>
                        </div>
                        <div id="answer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
    </div>
    <div class="block"></div>
    <?php
} // end first else
require_once '../includes/footer.php';
?>