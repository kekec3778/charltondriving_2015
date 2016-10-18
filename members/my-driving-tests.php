<?php //members home
	session_start();
	if(!isset($_SESSION['logged_in'])) {
		header('Location: ../index.php?ref_mem');
	} else {
		
		
$title = 'My Driving Tests';
		
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';

$id = $_SESSION['id'];

$theory_date = isset($_POST['theory_date']) ? $_POST['theory_date'] : null;
$theory_passed = isset($_POST['theory_passed']) ? true : false;
$practical_date = isset($_POST['practical_date']) ? $_POST['practial_date'] : null;
$practical_passed = isset($_POST['practical_passed']) ? true : false;
// now sanitize this data for entry into database


// query database


?>

<ol class="breadcrumb">
	  <li><a href="../index.php">Home</a></li>
	  <li><a href="members-home.php">My Driving</a></li>
	  <li class="active">My Driving Test Bookings</li>
	</ol>
<div class="container">
  <div class="page-header"><h1>My Driving Test Bookings</h1></div>
	<div class="row">
		<div class="col-sm-6">
			<p>You can book your driving theory test <a href="https://www.gov.uk/book-theory-test">HERE</a></p>
			<hr>
			
			<div class="row">
				<div class="col-sm-6">
				<form role="form">
				<div class="form-group">
					<label id="theory">My driving theory test is booked for:</label><input type="date" name="theory_date" class="form-control" value="My Theory Test Date">
				</div>
				<br>
				<div class="checkbox">
					<label for="theory passed"><input type="checkbox" name="theory_passed" id="theory_passed"><span id="passed">I have passed my driving theory test</span></label>
					<br>
				</div>
				<div class="block"></div>
				<script>
				$(document).ready(function() {
					$('#prac_test').hide();
					$('#theory_passed').change(function() {
						if($(this).is(':checked')) {
							$('#prac_test').show(2000);
							$('#theory').html('I passed my driving theory test on...');
						} else {
							$('#prac_test').hide(2000);
							$('#theory').html('My driving theory test is booked for:');
						}
					});
					$('#theory_date').focus(function() {
						$(this).val('');
					});
				});
				</script>
				</form>
				<br>
				</div>
			</div>
		</div>
		<div class="col-sm-6" id="prac_test">
		<p>You can book your practical driving test <a href="https://www.gov.uk/book-driving-test">HERE</a></p>
		<hr>
		<div class="row">
				<div class="col-sm-6">
				<form role="form">
				<div class="form-group" >
				
					<label>My practical driving test is booked for:</label><input type="date" name="practical_date" class="form-control" value="My Practical Test Date">
				</div>
				
				</form>
				<p>There are x days until your practical driving test</p>
				<br>
				</div>
			</div>
		</div>
	</div>
</div>

<?php	
	} // end first else 
	require_once '../includes/footer.php';
?>