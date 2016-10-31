<?php
session_start();

$title = 'UK Driving Test | Show Me / Tell Me Questions';


require_once '../includes/head.php';
?>

<script>//preloading images

    pic1 = new Image();
    pic1.src = "../img/vehicle_images/left-indicator-animation.gif";

    pic2 = new Image();
    pic2.src = "../img/vehicle_images/right-indicator-animation.gif";

    pic3 = new Image();
    pic3.src = "../img/vehicle_images/brake-lights.png ";

    pic4 = new Image();
    pic4.src = "../img/vehicle_images/hazard-animation.gif";

    pic5 = new Image();
    pic5.src = "../img/vehicle_images/rear-fog-light.png";

    pic5 = new Image();
    pic5.src = "../img/vehicle_images/reversing-lights.png";

    pic6 = new Image();
    pic6.src = "../img/vehicle_images/full-beam-headlights.png";

    pic7 = new Image();
    pic7.src = "../img/vehicle_images/dipped-headlights.png";

    pic8 = new Image();
    pic8.src = "../img/vehicle_images/front-fogs.png";

    pic9 = new Image();
    pic9.src = "../img/vehicle_images/front-hazards-animation.gif";

    pic10 = new Image();
    pic10.src = "../img/vehicle_images/front-side-lights.png";

    pic11 = new Image();
    pic11.src = "../img/vehicle_images/front-right-indicator-animation.gif";

    pic12 = new Image();
    pic12.src = "../img/vehicle_images/front-left-indicator-animation.gif";

</script>
<?php
require_once '../includes/nav.php';
?>
<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Basic Car Maintenance</li>
</ol>
<div class="container">


    <div class="row">
        <div class="page-header"><h2>&ldquo;Show Me - Tell Me&rdquo;</h2></div>

        <div class="col-sm-6">

            <p>At the start of your practical driving test the Examiner will ask you two basic car maintenance questions. This section of the test is known as the &lsquo;Show Me - Tell Me&rsquo; test.</p>
            <p>This section is designed to test your knowledge of very basic car checks which are essential for safe and legal driving.</p>
            <img src="../img/graphics/cartoon_man_broken_down.png" alt="maintenance" class="img-responsive img-margin pull-right">
            <ul>
                <li><a href="#lights">Lights and Signals</a></li>
                <li><a href="#lightsdemo">Lights Demo</a></li>
                <li><a href="#brakes">Brakes</a></li>
                <li><a href="#bonnet">Under the Bonnet</a></li>
                <li><a href="#windscreen">Keeping the Windscreen clear</a></li>
                <li><a href="#tyres">Safe Tyres</a></li>
                <li><a href="#headrestraints">Head Restraints</a></li>
            </ul>
            <br>
            <!-- windscreen -->


            <ul class="list-group">
                <li id="windscreen" class="list-group-item list-group-item-heading"><h4>Keeping the windscreen clear</h4></li>
                <li class="list-group-item list-group-item-info">How would you check the screen wash level?</li>
                <li class="list-group-item">Look at the reservoir. Make sure it is topped up to the neck of the reservoir with screenwash. </li>
                <li class="list-group-item list-group-item-info">Show me how you would clean the front and rear windscreen whilst driving</li>
                <li class="list-group-item">Pull/Push the wiper stalk until screen wash jets across the window. Use the wipers until the screen is clear. Make sure your wiper blades are clean before you start your journey by running a cloth along the length of the blade.</li>
            </ul>
            <br>

            <!--- under the hood --->

            <ul class="list-group">
                <li id="bonnet" class="list-group-item list-group-item-heading"><h4>Under the bonnet</h4></li>
                <li class="list-group-item list-group-item-info">Tell me how you would check the oil level.</li>
                <li class="list-group-item clearfix">

                    <img src="../img/dipstick.jpg"  class="pull-right" alt="dipstick">

                    Cold Engine. Level road surface. Pull out the dipstick and wipe it clean. Reinsert the dipstick, pull it out again and the oil level should be between the minimum and maximum markers. If it is low, top up the oil a little bit at a time through the filler cap. Keep re-checking the level as you fill it up. If the level is too high, you may need to remove some oil via the nut under the engine (check the manual for this).</li>

                <li class="list-group-item list-group-item-info">How would you check the engine coolant/anti-freeze?</li>
                <li class="list-group-item">Cold Engine. Level road surface. Check the reservoir. The level should rest between the minimum and maximum marks. If the engine is hot, and the level is low, wait for 5 minutes for it to cool down before topping up.</li>

                <li class="list-group-item list-group-item-info">Show me how you would check the brake and clutch fluid.</li>
                <li class="list-group-item clearfix">

                    <img src="../img/brakefluid2.jpg" class="pull-right" alt="brake fluid">

                    Look at the reservoir and the level should be between the maximum and minimum mark. If it is low, then you need to find out why. Go to a mechanic.</li>
            </ul>
            <br>

            <!-- brakes -->

            <ul class="list-group">
                <li id="brakes" class="list-group-item list-group-item-heading"><h4>Brakes</h4></li>
                <li class="list-group-item list-group-item-info">What is ABS? How would you know if it was malfunctioning?</li>
                <li class="list-group-item">ABS stands for Anti-Lock Braking System. If it is malfunctioning then the warning light will illuminate when the engine is running.</li>
                <li class="list-group-item list-group-item-info">Show me how you would check the brake lights</li>
                <li class="list-group-item">Press the brake. Ask someone to check the rear lights, or, look at a reflection.</li>
                <li class="list-group-item list-group-item-info">How would you check the handbrake, to see if it is working properly?</li>
                <li class="list-group-item">Pull it up. The button should release and secure the lever in an upright position. There should be tension in the handbrake lever, so that as it is pulled higher, it gets tighter.</li>
                <li class="list-group-item list-group-item-info">Show me how you would check the brake and clutch fluid.</li>
                <li class="list-group-item">Look at the reservoir and the level should be between the maximum and minimum mark. If it is low, then you need to find out why. Go to a mechanic.</li>

                <li class="list-group-item list-group-item-info">Tell me how you would check the footbrake?</li>
                <li class="list-group-item">Drive away, and if it is safe, press the brake. The car should respond by stopping in a straight line. If it pulls to one side, one brake is working harder than the other, and needs adjusting. When you are stationary the brake should offer some resistance, and should not feel loose.</li>
            </ul>
            <br>

            <ul class="list-group">
                <li id="tyres" class="list-group-item list-group-item-heading"><h4>Tyres</h4></li>
                <li class="list-group-item list-group-item-info">Tell me how you would check the tyre pressures, and the tread depth.</li>

                <li class="list-group-item">

                    <img src="../img/tyre_tread.jpg" class="pull-right" alt="tyre tread">
                    <img src="../img/tyre_tread2.jpg" class="pull-right" alt="tyre tread">

                    The tyres must be cold for you to get a true reading, so check <u>before</u> your journey. Apply a pressure gauge to the valve of each tyre. The pressure shown in the gauge should match that which is recommended in the drivers manual of the vehicle. Tread depth should be no less than 1.6mm (although 3mm is a safer limit). Tyres often have a tread wear indicator which projects to 1.6mm, so that when the tyre is worn, the rubber indicator is visible. Also check tyres for cuts, blisters, bulges, on both the inside and outside of the tyre.</li>
            </ul>
            <ul class="list-group">

                <li id="headrestraints" class="list-group-item list-group-item-heading"><h4>Head Restraints</h4></li>
                <li class="list-group-item list-group-item-info">Tell me how you would fix the head restraints</li>

                <li class="list-group-item">The head restraints should be level with the back of your head, so that in the event of an emergency stop, or collision, your neck will not be damaged by tipping back over the seat.</li>
            </ul>
            <hr>
        </div><!-- col left-->

        <!------------------vehicles --------------->

        <div class="col-sm-6 rear_lights"><!-- col right -->


            <h1 class="text-center" id="lightsdemo">Check the Lights</h1>



            <div id="indicators" class="text-center"> 

                <img class="vehicle" src="../img/vehicle_images/no-rear-lights.png" alt="nissan-note">

                <br>
                <table class="table table-bordered vehicle_table">
                    <tr>
                        <td></td>
                        <td><button id="brake" class="btn btn-block">Brake</button></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><button id="signalleft" class="btn btn-block">Left</button></td>
                        <td><button id="cancel" class="btn btn-block">Off</button></td>
                        <td><button id="signalright" class="btn btn-block">Right</button>
                        </td>
                    <tr>
                    <tr>
                        <td><button id="hazards" class="btn btn-block">Hazards</button></td>
                        <td><button id="fogs" class="btn btn-block">Rear Fog</button></td>
                        <td><button id="reverse" class="btn btn-block">Reverse</button></td>
                    <tr>
                </table>
            </div>
            <!--indicators---> 
            <script>
                var image = $('#indicators img');
                $(document).ready(function () {
                    $('#signalleft').click(function () {
                        $(image).attr('src', '../img/vehicle_images/left-indicator-animation.gif');
                    });//end click
                    $('#signalright').click(function () {
                        $(image).attr('src', '../img/vehicle_images/right-indicator-animation.gif');
                    });//end click
                    $('#cancel').click(function () {
                        $(image).attr('src', '../img/vehicle_images/no-rear-lights.png');
                    });// end click
                    $('#brake').mousedown(function () {
                        $(image).attr('src', '../img/vehicle_images/brake-lights.png');
                    });//end brake click
                    $('#brake').mouseup(function () {
                        $(image).attr('src', '../img/vehicle_images/no-rear-lights.png');
                    });//end mouseup
                    $('#hazards').click(function () {
                        $(image).attr('src', '../img/vehicle_images/hazard-animation.gif');
                    });//end hazards on

                    $('#fogs').click(function () {
                        $(image).attr('src', '../img/vehicle_images/rear-fog-light.png');
                    });//end fogs

                    $('#reverse').click(function () {
                        $(image).attr('src', '../img/vehicle_images/reversing-lights.png');
                    });//end reverse

                });//end ready
            </script>

            <div id="front_lights" class="text-center"> 

                <img src="../img/vehicle_images/no-front-lights.png" alt="front headlights" class="vehicle">

                <br>

                <table class="table table-bordered vehicle_table">
                    <tr>
                        <td><button id="dipped" class="btn btn-block">Dipped Beam</button></td>
                        <td><button id="fullbeam" class="btn btn-block">Full Beam</button></td>
                        <td><button id="flasher" class="btn btn-block">Flash</button></td>
                    </tr>
                    <tr>
                        <td><button id="ffog" class="btn btn-block">Front Fogs</button></td>
                        <td><button id="off" class="btn btn-block">Off</button></td>
                        <td><button id="sides" class="btn btn-block">Sidelights</button></td>
                    </tr>
                    <tr>
                        <td><button id="frindicator" class="btn btn-block">Right</button></td>
                        <td><button id="fhazards" class="btn btn-block">Hazards</button></td>
                        <td><button id="flindicator" class="btn btn-block">Left</button></td>
                    </tr>
                </table>
            </div>
            <!--fronts--> 
            <script>
                var fimg = $('#front_lights img');
                $(document).ready(function () {
                    $('#dipped').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/dipped-headlights.png');
                    });
                    $('#fullbeam').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/full-beam-headlights.png');
                    });
                    $('#flasher').mousedown(function () {
                        $(fimg).attr('src', '../img/vehicle_images/full-beam-headlights.png');
                    });
                    $('#flasher').mouseup(function () {
                        $(fimg).attr('src', '../img/vehicle_images/no-front-lights.png');
                    });
                    $('#ffog').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/front-fogs.png');
                    });//end ffogs
                    $('#fhazards').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/front-hazards-animation.gif');
                    });
                    $('#sides').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/front-side-lights.png');
                    });
                    $('#frindicator').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/front-right-indicator-animation.gif');
                    });
                    $('#flindicator').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/front-left-indicator-animation.gif');
                    });
                    $('#off').click(function () {
                        $(fimg).attr('src', '../img/vehicle_images/no-front-lights.png');
                    });
                });//end ready
            </script>

            <!--- lights ---->
            <ul class="list-group">
                <li id="lights" class="list-group-item list-group-item-heading"><h4>Vehicle Lighting and Signals</h4></li>
                <li class="list-group-item list-group-item-info">Show me how you would check the brake lights</li>
                <li class="list-group-item">Press the brake. Ask someone to check the rear lights, or, look at a reflection.</li>

                <li class="list-group-item list-group-item-info">Show me how you would check the indicator signals</li>
                <li class="list-group-item">Put on the indicators. Get out and have a look. Make sure all the bulbs are working.</li>

                <li class="list-group-item list-group-item-info">Show me how you would check the headlights/tail lights.</li>
                <li class="list-group-item">Turn the key so that the ignition lights are illuminated on the dashboard. Turn the lights on. Close the door of the car behind you. Walk around the car to check the lights are working.</li>

                <li class="list-group-item list-group-item-info">When is it necessary to use Main Beam Headlights? Show me how would you illuminate them?</li>
                <li class="list-group-item">Use the main beam headlights on unlit roads at night to improve your ability to see into the distance. You MUST dip your headlights <u>before</u> they dazzle oncoming traffic. When you illuminate the main beam then a Blue symbol will appear on the dashboard.</li>

                <li class="list-group-item list-group-item-info">Show me how you would illuminate the rear fog lights, and explain the conditional requirements for their use.</li>
                <li class="list-group-item">Turn on the headlights, then the rear fog light. It is bright, and should only be used when visibility is less than 100 metres, or approx. 25 car lengths.</li>

                <li class="list-group-item list-group-item-info">Show me how you would check the horn.</li>
                <li class="list-group-item">Press it. It should be loud enough to startle pigeons.</li>
            </ul>



        </div>
    </div>
</div>

<?php require_once '../includes/footer.php'; ?>
</body>
</html>