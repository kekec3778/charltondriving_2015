<?php 
session_start();
$title = 'Register';
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';

// check the email
if(isset($_POST['email'])) {
	$email = $_POST['email'];
} else {
	$email = '';
}

$sql = "SELECT * FROM register WHERE email = '$email'";
$result = $mysqli->query($sql);
if($result->num_rows == 1) {
	$valid_email = true;
	$row=$result->fetch_assoc();
	if($row['password'] == true) {
		$has_already_reg = 'You are already registered';
	}
} else {
	$valid_email = false;
}
?>

l class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li class="active">Are you registered?</li>
</ol>

<div class="container">
  <div class="page-header"><h1>Register</h1></div>
  <div class="row">
    <div class="col-md-6">
	<p>First, check to see that your email matches the one I have in the database</p>


		<form role="form" action="check_email.php" method="POST">
		<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php if(isset($email)) { echo $email; } ?>" required>
		</div>
		
		<button type="submit" class="btn btn-default" name="submit">Check email</button>
		</form>
		<br>
		
		<p><?php if(isset($has_already_reg)) {
			echo $has_already_reg . '. Please <a href="login.php">Login</a>.'; 
		} elseif($valid_email == true) { 
			$_SESSION['email'] = $email;
		?>
		<p>Hi <?php echo ucfirst($row['firstname']); ?>! - Now, create a memorable password</p>
		
		<form role="form" action="../php_scripts/register_user.php" method="POST">
		
		<div class="form-group">
		<label for="pwd">Create password</label>
		<input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
		</div>
		
		<div class="form-group">
		<label for="pwd2">Confirm Password</label>
		<input type="password2" class="form-control" id="pwd2" name="password2" placeholder="Confirm Password" required>
		</div>
		
		<button type="submit" class="btn btn-default" name="submit">Register</button>
		</form>
		<br>
		<?php } elseif ($valid_email == false) {
			echo 'That email address is not recognised.';
		} elseif ($has_already_reg == true) {
			echo 'You are already registered';
		}?>
	</div>
	
		
		<div class="col-md-6">
      <img src="../img/young_man_400.jpg" alt="pass-your-test" class="center-block img-responsive">
    </div>
	</div>
</div>

<?php require_once '../includes/footer.php'; ?>
</body>
</html>