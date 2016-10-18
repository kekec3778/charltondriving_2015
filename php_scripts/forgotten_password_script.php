<?php
session_start();
require_once '../php_scripts/connect.php';
// get email from form
$email = trim($_POST['email']);
// sanitize email
$email = $mysqli->real_escape_string($email);
//check to see if email exists in database
$sql = "SELECT * FROM register WHERE email = '$email'";
$result = $mysqli->query($sql);
if($result->num_rows == 1) {
	// if email does exist in database then...
	// create token and store in database
	$token = md5(uniqid(rand()));
	$sql = "UPDATE register SET token='$token' WHERE email='$email'";
	// token will be checked via GET request upon return to reset_password.php via email
	$token_insert = $mysqli->query($sql);
	// populate the $row variable with results from the database
	$row = $result->fetch_assoc();
	
// ==================================mailer================================== // 

require_once '../php-mailer/PHPMailerAutoload.php';
//require_once '../php-mailer/class.smtp.php';
//require_once '../php-mailer/class.phpmailer.php';

      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	  
      $email = $row['email'];
      $to_name = $row['firstname'] . ' ' . $row['surname'];
      $from_name = 'Neil\'s Driving School';
      $from = 'neil@charltondriving.com';
      $to = $email;
      $subject = 'Password Reset';
	  $message = 'Hi ' . ucfirst($row['firstname']) . ',<br><br>';
      $message .= 'You have requested to reset your password. Please follow this link to go ahead and reset your password: ';
	  
	  /* change this url for live site to //http://www.charltondriving.com/info/reset_password.php?t= */
	  
      $message .= '<a href="http://localhost/charltondriving_2015/info/reset_password.php?t=';
	  
	  // insert token into url ready to be checked upon submission to reset_password.php
	  $message .= $token . '">';
	  $message .= 'Reset Password</a><br><br>';
	  $message .= 'Thanks, Neil <br><br>Neils Driving School<br>SE London & Kent<br>07917 042 740<br><a href="mailto:neil@charltondriving.com">neil@charltondriving.com</a><br>www.charltondriving.com<br>';
	  
      $mail = new PHPMailer();
      $mail->IsSMTP();
      $mail->IsHTML(true);
      //$mail->Host = 'relay-hosting.secureserver.net'; // uncomment for live
	  //$mail->Port = 25; // uncomment for live
	  $mail->Host = 'smtpout.secureserver.net'; // comment out for live
      $mail->Port = 80; // comment out for live
	  
	  // $mail->SMTPDebug = 2; // for debugging
	  
      
      $mail->SMTPAuth = true; // set to false for live?
      $mail->Username = 'neil@charltondriving.com';
      $mail->Password = 'godaAdmiral315';
      $mail->FromName = $from_name;
      $mail->From = $from;
      $mail->AddAddress($to, $to_name);
      $mail->Subject = $subject;
      $mail->Body = $message;
      $result_mail = $mail->Send();
	  if($result_mail) { 
		header('Location: ../info/login.php?message=email has been sent');
	  } 
} else {
		header('Location: ../info/forgotten_password.php?message=that email is not recognised');
	
}
?>