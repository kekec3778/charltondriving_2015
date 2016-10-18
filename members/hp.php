<?php //members home
	session_start();
	if(!isset($_SESSION['logged_in'])) {
		header('Location: ../index.php?ref_mem');
	} else {
		
		
$title = 'Lessons';
		
		
require_once '../includes/head.php'; ?>


<?php 
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';
?>

	<ol class="breadcrumb">
	  <li><a href="../index.php">Home</a></li>
	  <li><a href="members-home.php">Learner Resources</a></li>
	  <li class="active">Lessons</li>
	</ol>

<div class="container">
  <div class="page-header"><h2>Lessons</h2></div>
		<ul>
		<li><a href="showtell.php">Show Me / Tell Me</a></li>
		<li><a href="pedestrian-crossings.php">Pedestrian Crossings</a></li>
		<li><a href="level_crossings.php">Level Crossings</a></li>
		<li><a href="bus_lanes.php">Bus Lanes</a></li>
		<li><a href="oneways.php">One Way Systems</a></li>
		<li><a href="dual_carriageways.php">Dual Carriageways</a></li>
		</ul>
  <div class="row">
	<div class="col-sm-6">
	
   
	</div>
  </div>
</div>

<?php } require_once '../includes/footer.php'; ?>
</body>
</html>