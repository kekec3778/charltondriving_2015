<?php
	// login user
	session_start();
	date_default_timezone_set('Europe/London');
	if($_SERVER['REQUEST_METHOD'] != 'POST') {
		header('Location: ../index.php');
	}
	require_once 'connect.php'; // connect to database script
        if($mysqli->connect_errno) {
            exit();
        }
	
	if(isset($_POST['submit'])) {
		$email = trim($_POST['email']);
		$email = $mysqli->real_escape_string($email);
		$password = trim($_POST['password']);
		$password = $mysqli->real_escape_string($password);
		$password = sha1($password);
	}
	
	$sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
	$result = $mysqli->query($sql); // creates a result object
	
	if($result->num_rows == 1) { // num rows is a property of the result object
		// login user
		while($row = $result->fetch_assoc()) {
		$_SESSION['name'] = $row['firstname']; 
		$_SESSION['email'] = $row['email'];
		$_SESSION['id'] = $row['id'];
		}
		
		if($_SESSION['email'] == 'neil@charltondriving.com') {
			$_SESSION['logged_in'] = true;
			$_SESSION['admin'] = true;
			header('Location: ../admin/admin.php');
			} else {
			$_SESSION['logged_in'] = true;
			$_SESSION['date'] = date("l jS \of F Y h:i:s A");
			// send login details to database
			$sql = "INSERT INTO logins (customer_id, login_date) VALUES ('{$_SESSION['id']}', '{$_SESSION['date']}')";
			$result = $mysqli->query($sql);
			if($result) {
			header('Location: ../members/members-home.php?logged_in=true');
			} else {
				echo $mysqli->error();
			}
		}
		
	} else{
		header('Location: ../info/login.php?error=Invalid+Email+or+Password');
	}
	
?>