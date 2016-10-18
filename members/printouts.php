<?php //members home
	session_start();
	if(!isset($_SESSION['logged_in'])) {
		header('Location: ../index.php?ref_mem');
	} else {
		
		
$title = 'Printouts';
		
		
require_once '../includes/head.php'; ?>


<?php 
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';
?>

	<ol class="breadcrumb">
	  <li><a href="../index.php">Home</a></li>
	  <li><a href="members-home.php">My Driving</a></li>
	  <li class="active">Printouts</li>
	</ol>

<div class="container">
  <div class="page-header"><h2>Printouts</h2></div>
		<ul>
		<li><a href="#">Fog</a></li>
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