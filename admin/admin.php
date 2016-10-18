<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}
$title = 'Admin';
require_once '../includes/head.php';
require_once '../includes/nav.php';

?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li class="active">Admin</li>
</ol>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<div class="page-header"><h1>Admin</h1></div>
		<ul class="list-group">
		<li class="list-group-item"><a href="add-new-customer.php">Add new customer</a></li>
                <li class="list-group-item"><a href="view-customers.php">View and Delete customers</a></li>

		<li class="list-group-item"><a href="amend-customer.php">Amend Customer</a></li>
		<li class="list-group-item"><a href="search-customers.php">Search Customers</a></li>
		<li class="list-group-item"><a href="record-lesson.php">Record a Lesson</a></li>
		<li class="list-group-item"><a href="view-lessons.php">View Lessons</a></li>
		<li class="list-group-item"><a href="login-record.php">Login Record</a></li>
		</ul>
		</div>
		
	</div>
</div>
<div class="block"></div>
<?php require_once '../includes/footer.php'; ?>
<script>
		$(document).ready(function() {
			$('.list-group-item')
			.hover(
				function() {
					$(this).css({
						'cursor': 'pointer',
						'color' : '#fff',
						'background-color' : '#7FA725'
						}).find('a').css('color','white');
				},
				function() {
					$(this).css({
						'cursor': 'initial',
						'color' : 'inherit',
						'background-color' : 'white'
						}).find('a').css('color','#5A7AC3');
				}
			)
			.click(function() {
			window.location = $(this).find('a').attr('href');
				return false;
			});
		});
	</script>
</body>
</html>