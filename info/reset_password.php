<?php 

if(isset($_GET['t']) || isset($_GET['message'])) {
	// if get parameters are set then show the page but restrict access so that page can only be accessed via the 2 get url attachments
session_start();
$title = 'Forgotten Password';
require_once '../php_scripts/connect.php';


$token = isset($_GET['t']) ? $_GET['t'] : '';
$sql = "SELECT * FROM register WHERE token='$token'";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
if($row['token'] != $token) {
	header('Location: ../info/forgotten_password.php?obsolete_token=1');
} else { // execute the script if tokens match

require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';
?>
<script>
<!-- this needs sorting out -->
	function matchPasswords() {
		var pwd1 = document.getElementById('pwd1').value;
		var pwd2 = document.getElementById('pwd2').value;
		var err = document.getElementById('error');
		if (pwd1 == '' || pwd2 == '') {
			err.innerHTML = '* Please enter a password';
			return false;
		} else if (pwd1.length < 6 || pwd1.length > 12) {
			err.innerHTML = '* Please choose a password between 6 and 12 characters in length';
			return false;
		} else if (pwd1 != pwd2) {
			// create error message and append to document
			err.innerHTML = '* Passwords do not match';
			return false;
		} else {
			return true;
		}
	}
</script>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<div class="page-header"><h1>Reset Password</h1></div>
		<p>Hi <?php echo ucfirst($row['firstname']); ?> - Reset your password here.</p>
		
		
		<form role="form" action="../php_scripts/update_password.php" method="POST" id="reset_password" onsubmit="return matchPasswords()">
		
		<div class="form-group">
		<input type="email" class="form-control" name="email" value="<?php if(isset($row['email'])) { echo $row['email']; } elseif (isset($_SESSION['temp_email'])) { echo $_SESSION['temp_email']; } ?>" readonly>
		</div>
		
		<div class="form-group">
		<p><span id="error" class="red"></span></p>
		<label for="pwd">Create password between 6 and 12 characters</label>
		<input type="password" class="form-control" id="pwd1" name="password" placeholder="Enter password" pattern=".{6,12}" title="Must be between 6 and 12 characters" required>
		</div>
		
		<div class="form-group">
		<label for="pwd2">Confirm Password</label>
		<input type="password" class="form-control" id="pwd2" name="password2" placeholder="Confirm Password" pattern=".{6,12}" title="Must be between 6 and 12 characters" required>
		</div>
		
		<input type="submit" class="btn btn-default" name="submit" value="Update password">
		</form>
		<br>
		<?php if(isset($_GET['e'])) { echo '<span class="red">* ' . $_GET['e'] . '</span>'; } ?>
		<?php if(isset($_GET['message'])) { echo '<span class="red">* ' . str_replace("_", " ", $_GET['message']) . '</span>'; } ?>
		</div>
	</div>
</div>
	<br>
	
	
</div>
<?php } // closing else brace
	require_once '../includes/footer.php'; ?>
</body>
</html>
<?php } else {
		header('Location: ../index.php');
}
?>