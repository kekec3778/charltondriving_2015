<?php
session_start();

if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}
require_once '../php_scripts/connect.php';
$search_term = isset($_POST['search_term']) ? $_POST['search_term'] : '';
$sql = "SELECT * FROM register WHERE 
		firstname LIKE '%$search_term%'
		OR
		surname LIKE '%$search_term%'
		OR
		address_1 LIKE '%$search_term%'
		OR
		address_2 LIKE '%$search_term%'
		OR
		postcode LIKE '%$search_term%'
		";
$result = $mysqli->query($sql);
while ($row = $result->fetch_assoc()) { ?>
	<ul class="list-group">
            <li class="list-group-item list-group-item-heading"><a href="customer-record.php?id=<?php echo $row['id']; ?>"><strong><?php echo ucfirst($row['firstname']) . ' ' . ucfirst($row['surname']); ?></strong></a></li>
            <li class="list-group-item">Email: <?php echo $row['email']; ?></li>
            <li class="list-group-item">Telephone: <?php echo $row['tel']; ?></li>
            <li class="list-group-item">Address: <?php echo $row['address_1'] . ', ' . $row['address_2'];?></li>
            <li class="list-group-item">Postcode: <?php echo $row['postcode']; ?></li>
	</ul>
	<br>
	<br>
<?php } ?>