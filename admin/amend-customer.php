<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}

$title = 'Amend Customer Info';
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/nav.php';

if(isset($_POST['submit'])) {
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$surname = isset($_POST['surname']) ? $_POST['surname'] : null;
	$address_1 = isset($_POST['address_1']) ? $_POST['address_1'] : null;
	$address_2 = isset($_POST['address_2']) ? $_POST['address_2'] : null;
	$postcode = isset($_POST['postcode']) ? strtoupper($_POST['postcode']) : null;
	$email = isset($_POST['email']) ? $_POST['email'] : null;
	$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : null;
	
	if($firstname != '' && $surname != '' && $email != '') {
		$stmt = $mysqli->prepare("UPDATE register SET firstname=?, surname=?, address_1=?, address_2=?, postcode=?, tel=? WHERE email='$email'");
		$stmt->bind_param('ssssss', $firstname, $surname, $address_1, $address_2,  $postcode, $telephone);
		if($stmt->execute()) {
			$message = '1 Record Amended';
		} else {
			$message = 'Record not amended';
		}
	}
} 

?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li class="active">Amend Customers</li>
</ol>

<div class="container">
	<div class="row">
		<div class="page-header"><h1>Amend customer record</h1></div>
		<div class="col-sm-6">
		<form action="amend-customer.php" method="POST" role="form">
		<div class="form-group">
		<label for="name">Name</label>
		<input id="name" type="text" name="firstname" class="form-control" required>
		</div>
		<div class="form-group">
		<label for="surname">Surname</label>
		<input type="text" name="surname" class="form-control" required>
		</div>
		<div class="form-group">
		<label for="address_1">Address 1</label>
		<input type="text" name="address_1" class="form-control">
		</div>
		<div class="form-group">
		<label for="address_2">Address 2</label>
		<input type="text" name="address_2" class="form-control">
		</div>
		<div class="form-group">
		<label for="postcode">Postcode</label>
		<input type="text" name="postcode" class="form-control">
		</div>
		<div class="form-group">
		<label for="email">Email</label>
		<input type="email" name="email" class="form-control" required>
		</div>
		<div class="form-group">
		<label for="tel">Telephone</label>
		<input type="tel" name="tel" class="form-control">
		</div>
		<input type="submit" name="submit" id="submit" value="Add new customer" class="btn btn-default">
		</form>
		<br>
		</div>
		
		<div class="col-sm-6">
		<ul class="list-group">
			<?php if(isset($message)) { ?>
			
			
			<li class="list-group-item list-group-item-heading list-group-item-success"><?php if(isset($message)) { echo $message; } ?></li>
			<li class="list-group-item"><strong><?php echo $_POST['firstname'] . ' ' . $_POST['surname']; ?></strong></li>
			<li class="list-group-item"><?php echo $_POST['address_1'] . ', ' . $_POST['address_2']; ?></li>
			<li class="list-group-item"><?php echo strtoupper($_POST['postcode']); ?></li>
			<li class="list-group-item"> <?php echo $_POST['tel']; ?></li>
			<li class="list-group-item"><?php echo $_POST['email']; ?></li>
			
			 <?php } ?>
		</ul>
		</div>
		
	</div>
</div>
<?php // end if
require_once '../includes/footer.php'; ?>
</body>
</html>