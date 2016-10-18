<?php
session_start();

if($_SERVER['REQUEST_METHOD'] != 'POST') {
		header('Location: ../index.php');
	}
require_once 'connect.php'; // connect to database script
$email = $_SESSION['email'];

$pwd1 = isset($_POST['password']) ? trim($_POST['password']) : '';
$pwd2 = isset($_POST['password2']) ? trim($_POST['password2']) : '';

if (strlen($pwd1)<6 || strlen($pwd1)>12) { 
	header('Location: ../info/register.php?format=bad&email=' . $email);
	exit();
}

if($pwd1 == $pwd2) {
	
	// hash the password
	$pwd1 = sha1($pwd1);
	// insert password into the database
	// prepare and bind
	$stmt = $mysqli->prepare("UPDATE register SET password = ? WHERE email = '$email'");
	$stmt->bind_param('s', $pwd1);
		if($stmt->execute()) {
			$_SESSION['email'] = $email;
			header('Location: ../info/login.php?registered=true&email=' . $email);
		} 
	} else {
	// passwords do not match
	header('Location: ../info/register.php?password=nomatch&email=' . $email);
}

?>