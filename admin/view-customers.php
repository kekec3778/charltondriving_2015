<?php 
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}

$title = 'View Customers';
require_once '../php_scripts/connect.php';
require_once '../php_scripts/lessons_array.php';
require_once '../includes/head.php';
require_once '../includes/nav.php';

if(isset($_POST['delete_customer'])) {
    $id = $_POST['id'];
    $customer = $_POST['name'];
    $sql = "delete from register WHERE id=$id";
    $result = $mysqli->query($sql);
    if($result) { $message = "$customer has been deleted from records"; }
}


$sql = "SELECT * FROM register ORDER BY firstname";
$result = $mysqli->query($sql);
?>

<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li class="active">View Customers</li>
</ol>


<div class="container">
	<div class="page-header"><h1>View Customers</h1></div>
        <p>There are currently <?php echo $result->num_rows; ?> customers</p>
        <?php if(isset($message)) { echo $message; } ?>
	<div class="row">
		<div class="col-sm-12">
		<h3>Contact Info</h3>
                
                    <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Tel</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php while($row=$result->fetch_assoc()) { ?>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                <tbody>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['firstname'] . ' ' . $row['surname']; ?></td>
                                        <td><?php echo $row['address_1'] . ' ' . $row['address_2']; ?></td>
                                        <td><?php echo $row['tel']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <input type="hidden" name="name" value="<?php echo $row['firstname'] . ' ' . $row['surname']; ?>">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <td class="text-center"><button class="btn btn-default" type="submit" name="delete_customer" onclick="confirm('Are you sure you want to delete <?php echo $row['firstname'] . ' ' . $row['surname'] ?>');">Delete</button></td>
                                    </tr>
                                </tbody>
                            </form>
                            <?php } ?>
                    </table>
		</div>
	</div><!--row-->
</div><!--container-->
<div class="block"></div>
<?php 
require_once '../includes/footer.php'; ?>
</body>
</html>