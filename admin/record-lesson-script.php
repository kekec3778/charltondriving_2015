<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}

$title = 'Customer Record';
require_once '../php_scripts/connect.php';

$id = isset($_POST['id']) ? $_POST['id'] : ''; 
$sql = "SELECT * FROM register WHERE id='$id'";

$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) { ?>

	<table class="table table-striped table-responsive table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Address</th>
				<th>Postcode</th>
				<th>Email</th>
				<th>Telephone</th>
			</tr>
		</thead>
		
		<tbody>
		<td><?php echo $row['firstname'] . ' ' . $row['surname']; ?></td>
		<td><?php echo $row['address_1'] . ' ' . $row['address_2']; ?></td>
		<td><?php echo $row['postcode']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['tel']; ?></td>
		</tbody>
	</table>
	
	
<?php }; ?>