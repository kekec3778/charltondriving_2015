<?php
// this worked - changed sptpauth to false, host to relay-hosting.secreserver.net, and port to 25
require_once '../php-mailer/PHPMailerAutoload.php';
$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "relay-hosting.secureserver.net"; // SMTP server
$mail->Port = 25;

$mail->SMTPAuth = false;
$mail->Username = 'neil@charltondriving.com';
$mail->Password = 'godaAdmiral315';

$mail->From     = "neil@charltondriving.com	";
$mail->AddAddress("neilcartwright1975@hotmail.com");
$mail->Subject  = "First PHPMailer Message";
$mail->Body     = "Hi! \n\n This is my first e-mail sent through PHPMailer.";
$mail->WordWrap = 50;
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
?>