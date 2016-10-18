<?php
session_start();
$title = 'Prices';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Info</li>
    <li class="active">Prices</li>
</ol>
<div class="container">
    <div class="page-header"><h1>Prices</h1></div>
    <div class="row">
        <div class="col-md-6">
            <div id="price_table">
                <table class="table table-bordered">
                    <thead><tr><td colspan="2"><strong>Special Offers Autumn 2016</strong></td></tr></thead>
                    <tr><td colspan="2">Pay for 10 lessons and get 1 lesson Free</tr>
                </table>

                <table class="table table-bordered">
                    <thead><tr><td colspan="2"><strong>Weekdays per Full Hour</strong></td></tr></thead>
                    <tr><td>Mon-Fri 8am-4pm</td><td>&pound;25</td></tr>
                    <tr><td>Mon-Fri 4pm-9pm</td><td>&pound;27</td></tr>
                </table>
                <table class="table table-bordered">
                    <thead><tr><td colspan="2"><strong>Weekends per Full Hour</strong></td></tr></thead>
                    <tr><td>Saturdays</td><td>&pound;27</td></tr>
                </table>

                <table class="table table-bordered">
                    <tr><td>Driving Test Car Hire</td><td>&pound;75</td></tr>
                </table>

                <table class="table table-bordered">
                    <tr><td>Motorway Lessons</td><td>&pound;30</td></tr>
                    <tr><td>Pass Plus</td><td>&pound;160</td>
                    <tr><td>Refresher Lessons <strong>Daytimes</strong></td><td>&pound;25</td></tr>
                    <tr><td>Refresher Lessons <strong>Eve/Sat</strong></td><td>&pound;27</td></tr>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <img src="../img/young_woman_400.jpg" alt="pass-your-test" class="center-block img-responsive">
        </div>
    </div>
</div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>