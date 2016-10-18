<?php
session_start();
$title = 'Recommended Driving Instructor | SE London';
require_once '../includes/head.php';
require_once '../includes/nav.php';
?>

<ol class="breadcrumb">
    <li><a href="../index.php">Home</a></li>
    <li>Info</li>
    <li class="active">Recommendations</li>
</ol>
<div class="container">
    <div class="page-header"><h1>Recommendations</h1></div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <?php include_once '../includes/recommendations_full.php'; ?>

        </div>
    </div>
</div>
<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>
