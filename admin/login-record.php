<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}

$title = 'Login Record';
require_once '../php_scripts/connect.php';
require_once '../includes/head.php';
require_once '../includes/nav.php';

$sql = "SELECT logins.customer_id, logins.login_date, login_id, register.firstname, register.surname 
		FROM logins
		INNER JOIN register
		ON logins.customer_id=register.id
		ORDER BY logins.login_id DESC";
$result = $mysqli->query($sql);
?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li class="active">Login Record</li>
</ol>

<div class="container">
	<div class="page-header"><h1>Logins</h1></div>
	<div class="row">
		<div class="col-sm-12">
		<ul class="list-group">
		<?php
		while($row = $result->fetch_assoc()) { ?>
		<li class="list-group-item"><?php echo ucfirst($row['firstname']) . ' ' . ucfirst($row['surname']) . ' logged in on ' . $row['login_date']; ?></li>
		<?php } ?>
		</ul>
		</div>
	</div>
</div>
<div class="block"></div>
<?php // end if
require_once '../includes/footer.php'; ?>
</body>
</html>