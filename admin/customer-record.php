<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}

$title = 'Customer Record';
require_once '../php_scripts/connect.php';
require_once '../php_scripts/lessons_array.php';

$id=$_GET['id'];

if(isset($_POST['has_passed'])) {
	$sql = "UPDATE register SET has_passed=1 WHERE id = $id";
	$result = $mysqli->query($sql);
};


require_once '../includes/head.php';
require_once '../includes/nav.php';



?>
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li class="active">Customer Record</li>
</ol>


<div class="container">
	<div class="page-header"><h1>Customer Record</h1></div>
	<div class="row">
		<div class="col-sm-6">
		<h3>Contact Info</h3>
		<table class="table table-bordered">
			<thead>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Address</th>
			<th>Tel</th>
			<th>Email</th>
			</tr>
			</thead>
			<tbody>
			<tr>
			<?php 
			$sql = "SELECT * FROM register WHERE id='$id'";
			$result = $mysqli->query($sql);
			while($row=$result->fetch_assoc()) { ?>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['firstname'] . ' ' . $row['surname']; ?></td>
			<td><?php echo $row['address_1'] . ' ' . $row['address_2']; ?></td>
			<td><?php echo $row['tel']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<?php } ?>
			</tr>
			</tbody>
		</table>
		<h3>Attendance</h3>
		<table class="table table-bordered">
		<thead>
		<tr>
		<th>First Lesson</th>
		<th>No. Lessons</th>
		<th>Payments</th>
		<th>Cancelled</th>
		</tr>
		</thead>
		<tbody>
		<tr>
		<td>
		<?php
		$sql = "SELECT MIN(date) FROM lessons WHERE customer_id='$id'";
				$result = $mysqli->query($sql);
				$row = $result->fetch_array();
				?>
				<?php 
				$first_lesson_date = $row[0];
				$first_lesson_date = new DateTime($first_lesson_date);
				$format = 'l jS F, Y';
				?>
		<?php echo $first_lesson_date->format($format); ?>
		</td>
		<td>
		<?php 
				$sql = "SELECT SUM(duration) FROM lessons WHERE customer_id='$id'";
				$result = $mysqli->query($sql);
				$row = $result->fetch_array();
				?><?php echo $row[0] . ' hours'; ?>
		</td>
		<td>
		<?php
				$sql = "SELECT SUM(payment) FROM lessons WHERE customer_id='$id'";
				$result = $mysqli->query($sql);
				$row = $result->fetch_array();
				?>
				<?php echo '&pound;' . number_format($row[0], 2); ?>
		</td>
		<td>
		<?php 
				$sql = "SELECT COUNT(cancelled) FROM lessons WHERE customer_id='$id' AND (cancelled='with_notice' OR cancelled='without_notice')";
				$result=$mysqli->query($sql);
				$row=$result->fetch_array();
				?>
				<?php echo $row[0]; ?>
		</td>
		</td>
		</tbody>
		</table>
		
		
		<?php 
			$sql = "SELECT has_passed FROM register WHERE id=$id";
			$result = $mysqli->query($sql);
			$value = $result->fetch_assoc();
		?>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
		<table class="table table-bordered text-center">
			<tr><td>Has Passed Test</td><td><input type="checkbox" name="has_passed" <?php if($value['has_passed']==1) { echo 'checked'; }; ?>></td><td><input type="submit" name="update_pass"value="Update Records"></tr>
			
		</table>
		</form>
		
		</div><!--col-->
		<div class="col-sm-6">
		<h3>Lessons</h3>
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
				<th>Date</th>
				<th>Lesson Subjects</th>
				<th>Payment</th>
				<th>Teacher Comments</th>
			</thead>
			
			<tbody>
				<?php 
				$sql = "SELECT * FROM lessons WHERE customer_id='$id'";
				$result = $mysqli->query($sql);
				while($row=$result->fetch_assoc()) { ?>
				<tr>
				<td>
				<?php 
				$lesson_date = $row['date'];
				$lesson_date = new DateTime($lesson_date);
				$format = 'l jS F Y';
				echo $lesson_date->format($format); ?></td>
				<td><?php echo $row['lesson']; ?>
				</td>
				<td><?php echo $row['payment']; ?></td>
				<td><?php echo $row['notes']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div><!--row-->
</div><!--container-->
<div class="block"></div>
<?php 
require_once '../includes/footer.php'; ?>
</body>
</html>