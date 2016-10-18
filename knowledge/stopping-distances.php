<?php
//members home

$title = 'Car Stopping Distances';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Theory</li>
    <li class="active">Stopping Distances</li>
</ol>
<div class="container">
    <div class="page-header"><h1>Stopping Distances</h1></div>


    <div class="row">

        <div class="col-sm-8 col-sm-offset-2">

            <div class="h-code well">
                <h3>On a good dry road, how long will it take you to stop? <span class="small alert-warning" id="info"></span></h3>

                <p>At <input type="number" step="10" min="0" max="100" id="mph" style="width:40px;" title="Type a Number" value="70"> mph your overall stopping distance will be: <strong><span id="stopping_distance">x</span> feet, <span id="into_metres">y</span> metres, or <span id="into_car_lengths">z</span> car lengths</strong>.</p>
                <p>This is calculated using the formula "((mph / 20) + 1) * mph".</p>
                <script>
                    $(document).ready(function () {

                        var getStoppingDistanceInFeet = function (mph) {
                            var osd = Math.floor(((mph / 20) + 1) * mph);
                            return osd;
                        };

                        var feetIntoMetres = function (f) {
                            var m = Math.round(f / 3.28084);
                            return m;
                        };

                        var metresIntoCarLengths = function (m) {
                            var cl = Math.round(m / 4);
                            return cl;
                        }

                        $('#mph').on('change keyup', function () {

                            var mph = $(this).val();

                            if (!isNaN(mph)) {
                                $('#info').html('');
                                var x = getStoppingDistanceInFeet(mph);
                                $('#stopping_distance').html(x);

                                var y = feetIntoMetres(x);
                                $('#into_metres').html(y);

                                var z = metresIntoCarLengths(y);
                                $('#into_car_lengths').html(z);

                            } else {
                                $('#info').html('Please enter a number');
                            }
                        });// end on keyp
                    }); // end ready
                </script>
            </div>
        </div>
    </div>
</div><!--container-->
<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>