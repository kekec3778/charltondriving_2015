<?php
$title = 'Hills';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>
<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Hills</li>
</ol>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header"><h1>Hills</h1></div>
            <p class="top-buffer20"></p>


            <div class="row top-buffer40"><!--nested row-->	
                <div class="col-xs-4">
                    <figure id="figr-1">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_downhill_gradient.png" alt="warning downhill gradient">
                        <script>
                            $('#figr-1 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-1').append('<figcaption>Warning! Steep downhill gradient</figcaption>');
                                    });
                        </script>
                    </figure>
                </div>

                <div class="col-xs-4">
                    <figure id="figr-2">
                        <img class="img-responsive center-block" src="../img/road_signs/warning_uphill_gradient.png" alt="warning uphill gradient">
                        <script>
                            $('#figr-2 img')
                                    .mouseover(function () {
                                        $(this).css('cursor', 'pointer');
                                    })
                                    .one('click', function () {
                                        $('#figr-2').append('<figcaption>Warning! Steep uphill gradient</figcaption');
                                    });
                        </script>
                    </figure>
                </div>


                <div class="col-xs-4">
                    <figure id="figr-4">
                        <img src="../img/road_signs/warning_try_your_brakes.png"  class="img-responsive center-block" alt="try your brakes">
                    </figure>

                </div><!--nested column-->
            </div>	<!--nested row-->
        </div><!--column-->
    </div><!--row-->


    <div class="row">
        <div class="col-sm-6 top-buffer40">
            <div class="e-skills well">
                <h3>Moving off uphill</h3>
                <p>Your vehicle will want to roll back. To avoid this you must use the accelerator, clutch and parking brake together.</p>
                <p>Much of the drill for moving off uphill is the same as for moving off on the level.</p>
                <ul>
                    <li>With your left foot, press the clutch pedal down andhold it down.</li>
                    <li>Move the gear lever into first.</li>
                    <li>With your right foot, press the accelerator further than you would when starting on the level and hold it perfectly steady. The amount will depend on how steep the hill is.</li>
                    <li>Bring the clutch pedal up to the biting point, which will be slightly higher than when you're moving off on the level</li>
                    <li>Make your safety checks, use your mirrors and look round over your right shoulder to check the blind spot.</li>
                    <li>Decide whether you need to signal your intention to move off.</li>
                    <li>Signal if necessary.</li>
                    <li>Look round again if necessary.</li>
                    <li>Lift the parking brake and release the button while you press the accelerator a little more. How much acceleration you need depends on the steepness of the hill.</li>
                    <li>Let the clutch up a little more, until you feel and hear the engine try to move the vehicle.</li>
                    <li>Release the parking brake smoothly.</li>
                    <li>Gradually press the accelerator as the vehicle begins to move, and bring up the clutch pedal smoothly.</li>
                </ul>
                <p class="em">Driving - The essential skills pg 99</p> 
            </div>

            <div class="e-skills clearfix well">
                <h3>Controlling the parking brake and clutch</h3>
                <p>This requires good timing. If you release the parking brake too soon, the vehicle will roll back.</p>
                <p>The vehicle will stall if:</p>
                <ul>
                    <li>you hold the parking brake too long</li>
                    <li>you bring up the clutch too quickly or too far</li>
                    <li>you don't use enough acceleration.</li>
                </ul>
                <p>Practise the steps until you've mastered the technique. Then practise moving off uphill without rolling backwards; from behind a parked vehicle and at an angle.</p>
                <p>The more you practise this manoeuvre, the more competent you'll be at getting it right.</p>
                <p class="em">Driving - The essential skills pg 100</p>      

            </div>
        </div>


        <div class="col-sm-6 top-buffer40">
            <div class="e-skills well">

                <h3>Moving off downhill</h3>
                <p>The routine is simpler than moving off uphill because the weight of the vehicle helps you to move away.</p>
                <p>The aim is to prevent the vehicle from rolling forward down the hill whilst moving away. The most effective, and possibly simplest, method is as follows.</p>
                <ul>
                    <li>Press the clutch pedal down fully.</li>
                    <li>Engage the appropriate gear for the severity of the slope (this could be second gear).</li>
                    <li>Apply the footbrake.</li>
                    <li>Release the parking brake, keeping the footbrake applied.</li>
                    <li>Check morrors. Look round just before you move off to coer the blind spots.</li>
                    <li>Signal if necessary.</li>
                    <li>Only move away when you're sure it's safe to do so.</li>
                    <li>Look round again if necessary.</li>
                    <li>Release the footbrake and release the clutch pedal smoothly as the vehicle starts to move.</li>
                </ul>
                <p>However, there may be other methods that can be employed. If they ensure that the manoeuvre is carried out under control, they are equally acceptable.</p>
                <p class="em">Driving - The essential skills - pg 101</p>
            </div>


            <div class="i-box clearfix well">
                <img src="../img/road_signs/keep_in_low_gear.png" alt="low gear now" class="pull-right">
                <p>See also <a href="../pdfs/on-the-road.pdf">Driving - The essential skills - pg 153-156</a></p>
            </div>

            <div class="h-code well">
                <h3>Highway Code Rule 252</h3>
                <img src="../img/graphics/parking_on_hills.png" alt="parking on hills" class="pull-right img-margin">
                <p>Parking on hills. If you park on a hill you should</p>
                <ul><li>park close to the kerb and apply the handbrake firmly</li>
                    <li>select a forward gear and turn your steering wheel away from the kerb when
                        facing uphill</li>
                    <li>select reverse gear and turn your steering wheel towards the kerb when facing
                        downhill</li>
                    <li>use ‘park’ if your car has an automatic gearbox.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>