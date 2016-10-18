<?php
session_start();
require_once 'connect.php';
	$email = trim($_POST['email']);
	$pwd1 = $_POST['password'];
	$pwd2 = $_POST['password2'];
	
if($pwd1 == $pwd2 && (strlen($pwd1) > 5 && strlen($pwd1) < 13)) {
	// if passwords match and are between 6 and 12 chars then ...
	// passwords match 
		$pwd1 = sha1($pwd1);
		$stmt = $mysqli->prepare("UPDATE register SET password = ? WHERE email = ?");
		$stmt->bind_param('ss', $pwd1, $email);

		if($stmt->execute()) {
			header('Location: ../info/login.php?email=' . $email);
		} else {
			header('Location: ../info/reset_password.php?message=An error has occured');
		}	
	
} else {
	$_SESSION['temp_email'] = $email;
	header('Location: ../info/reset_password.php?message=Passwords_must_match_and_be_between_6_and_12_characters');
}
?>