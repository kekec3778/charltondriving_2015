<?php 
session_start();
$title = 'Register';
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';

$valid_email=null;
$invalid_email=null;
$has_already_reg=null;
// initialize variables to prevent error messages on initial rendering of page
if(isset($_POST['check_email'])) {
	$email = $_POST['email'];
	// check posted email against database
	$sql = "SELECT * FROM register WHERE email = '$email'";
	$result = $mysqli->query($sql);
	// if only one result then email is in database
	if($result->num_rows == 1) {
		$valid_email = true;
		$row=$result->fetch_assoc();
			// check to see if password exists on database, if it does, then user has already registered 
			if($row['password'] == true) {
				$has_already_reg = '<span class="red">* You are already registered</span>.<br> <a href="forgotten_password.php">Forgotten Password?</a><br>';
			}
	} else {
		// if email does not exist on database then display error
		$invalid_email = true;
	}
} 
?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li class="active">Register</li>
</ol>

<div class="container">
  <div class="page-header"><h1>Register</h1></div>
  <div class="row">
    <div class="col-md-6">
	<p>Please enter your email address, using the email address you provided when you started lessons. <?php if(isset($_GET['password'])) {
		echo '<span class="red">Those passwords did not match.</span>';
	}?><?php if(isset($_GET['format'])) { echo '<span class="red">Please choose a password between 6 and 12 characters.</span>'; } ?></p>


		<form role="form" action="register.php" method="POST">
		<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="<?php if(isset($email)) { echo $email; } ?><?php if(isset($_GET['password']) || isset($_GET['email'])) { echo $_GET['email']; }?>" required>
		</div>
		
		<button type="submit" class="btn btn-default" name="check_email">Check email</button>
		</form>
		<br>
		<!-- display errors-->
		<p><?php if(isset($has_already_reg)) {
			echo $has_already_reg . '<a href="login.php"> Login</a>.'; 
		} elseif($valid_email) { 
			$_SESSION['email'] = $email;
		?>
		<!-- if email exists on database then display next section of form -->
		<p>Hi <?php echo ucfirst($row['firstname']); ?>! - Now, create a memorable password</p>
		
		<form role="form" action="../php_scripts/register_user.php" method="POST">
		
		<div class="form-group">
		<label for="pwd">Create a password between 6 and 12 characters</label>
		<input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password"  required>
		
		</div>
		
		<div class="form-group">
		<label for="pwd2">Confirm Password</label>
		<input type="password" class="form-control" id="pwd2" name="password2" placeholder="Confirm Password" required>
		</div>
		
		<button type="submit" class="btn btn-default" name="submit">Register</button>
		</form>
		<br>
		<!-- display further errors -->
		<?php } elseif ($invalid_email) {
			echo '<span class="red">* That email address is not recognised.</span>';
		} elseif ($has_already_reg == true) {
			echo '<span class="red">* You are already registered</span><br>';
		} 
		
		?>
	</div>
	
		
		<div class="col-md-6">
		
      <img src="../img/young_man_400.jpg" alt="pass-your-test" class="center-block img-responsive">
    </div>
	</div>
</div>

<?php require_once '../includes/footer.php'; ?>
</body>
</html>