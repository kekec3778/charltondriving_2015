<?php 
session_start();
$title = 'Forgotten Password';
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';

?>
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li class="active">Forgotten Password</li>
</ol>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<div class="page-header"><h1>Forgotten Password</h1></div>
		
		<p><span class="red"><?php if(isset($_GET['obsolete_token'])) { echo '* Reset token expired. Please try again'; } ?></span></p>
		<form role="form" action="../php_scripts/forgotten_password_script.php" method="POST">
		<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name="email" placeholder="mytag@myemailaddress.com">
		</div>
		<button type="submit" class="btn btn-default">Request New Password</button>
		</form>
		<br>
		<?php if(isset($_GET['message'])) { echo '<span class="red">* ' . $_GET['message'] . '</span>'; } ?>
		</div>
	</div>
</div>
	<br>
	
	
</div>
<?php require_once '../includes/footer.php'; ?>
</body>
</html>