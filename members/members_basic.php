<?php //members home
	session_start();
	if(!isset($_SESSION['logged_in'])) {
		header('Location: ../index.php?ref_mem');
	} else {
		
		
$title = 'Basic HTML';
		
		
require_once '../includes/head.php'; ?>


<?php 
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';
?>

	<ol class="breadcrumb">
	  <li><a href="../index.php">Home</a></li>
	  <li><a href="members-home.php">Learner Resources</a></li>
	  <li class="active">Show Me - Tell Me</li>
	</ol>

<div class="container">
  <div class="page-header"><h1>Basic</h1></div>
  
  <div class="row">
	<div class="col-sm-6">
	
   
	</div>
  </div>
</div>

<?php } require_once '../includes/footer.php'; ?>
</body>
</html>