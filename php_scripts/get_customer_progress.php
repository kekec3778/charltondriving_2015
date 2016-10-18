<?php
session_start();
if(!isset($_SESSION['admin'])) {
	header('Location: ../index.php?via=admin');
}
require_once '../php_scripts/progress_array.php';
require_once '../php_scripts/connect.php';
$customer_id = $_POST['customer_id'];

// select all from the progress_report field in the database and order by the longest string, which would be the most complete version
$sql = "SELECT progress_report, lesson_id FROM lessons WHERE customer_id='$customer_id' AND progress_report IS NOT NULL ORDER BY lesson_id DESC LIMIT 1";

$result = $mysqli->query($sql);

while($row=$result->fetch_assoc()) {
	echo $row['progress_report'];
	echo $row['lesson_id'];
}
?>