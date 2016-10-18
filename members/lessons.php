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
	  <li><a href="members-home.php">My Driving</a></li>
	  <li class="active">Lesson Recaps</li>
	</ol>

<div class="container">
  <div class="page-header"><h2>Lesson Recaps</h2></div>
		<ul>
		<li><a href="show-me-tell-me.php">Show Me / Tell Me</a></li>
		<li><a href="pedestrian-crossings.php">Pedestrian Crossings</a></li>
		<li><a href="level-crossings.php">Level Crossings</a></li>
		<li><a href="bus-lanes.php">Bus Lanes</a></li>
		<li><a href="one-ways.php">One Way Systems</a></li>
		<li><a href="dual-carriageways.php">Dual Carriageways</a></li>
		<li><a href="hills.php">Hills</a></li>
		<li><a href="mini-roundabouts.php">Mini-roundabouts</a></li>
		<li><a href="bends.php">Bends</a></li>
		</ul>
  <div class="row">
	<div class="col-sm-6">
	
   
	</div>
	<div class="block"></div>
  </div>
</div>

<?php } require_once '../includes/footer.php'; ?>
</body>
</html>