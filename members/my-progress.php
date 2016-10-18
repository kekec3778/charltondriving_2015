<?php //members home
	session_start();
	if(!isset($_SESSION['logged_in'])) {
		header('Location: ../index.php?ref_mem');
	} else {
		
		
$title = 'My Progress';
require_once '../php_scripts/progress_array.php';	
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/nav.php';

$id = $_SESSION['id'];
?>


<ol class="breadcrumb">
	  <li><a href="../index.php">Home</a></li>
	  <li><a href="members-home.php">My Driving</a></li>
	  <li class="active">Progress</li>
	</ol>
<div class="container">
  <div class="page-header"><h1>Progress</h1></div>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<p>From this page you can keep track of your progress towards your practical driving test.</p><p>If the subject has been checked then it has been introduced. However, further lessons and practice sessions focusing on each subject may still be required.</p>
			<ul class="list-group">
			
			<?php
			$customer_id = $id;
			// get the latest progress report from the server
			$sql = "SELECT progress_report FROM lessons WHERE customer_id='$customer_id' AND progress_report IS NOT NULL ORDER BY lesson_id DESC LIMIT 1";

			$result = $mysqli->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$arrayOfSubjects = explode('+', $row['progress_report']);
				}
	
				foreach ($subject_list AS $subject) { ?>
	
					<li class="list-group-item"
					
						<?php if(in_array($subject, $arrayOfSubjects)) { 
							// if subject has been completed line-through it
							echo 'style="text-decoration:line-through;color:green;"';
						} ?>
						
						<?php if(strpos($subject,'*') === 0) {
							// remove stars from subject heading
							$subject = substr($subject, 1, -1);
							// add styles particular to this header
							echo 'style="font-weight:bold;font-size:14pt;text-align:center;"';
						}?>
						
					><!-- end of li tag -->
					
					<?php echo ucfirst(str_replace('-', ' ', $subject)); 
								if(in_array($subject, $arrayOfSubjects)) { 
									echo '<span class="tick"></span>'; 
								} 
					?>
					</li>
					
			<?php } ?>
			
			</ul>
	
	
<?php
} else { ?>
	<p class="bg-warning">Sorry. There are currently no records available.</p>
<?php } ?>
		</div>
	</div><!-- row -->
</div><!-- container -->
	
	
<div class="block"></div>

<?php	
	} // end first else 
	require_once '../includes/footer.php';
?>