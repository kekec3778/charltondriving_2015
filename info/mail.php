<?php
// mail program to send form
if(!isset($_POST['submit'])) {
  header('Location: ../index.php');
} else {
$form_name = isset($_POST['name']) ? $_POST['name'] : '';
$form_address = isset($_POST['address']) ? $_POST['address'] : '';
$form_email = isset($_POST['email']) ? $_POST['email'] :'';
$form_tel = isset($_POST['tel']) ? $_POST['tel']: '';
$form_enquiry = isset($_POST['enquiry']) ? $_POST['enquiry'] : '';
?>

<?php 
//mail the form content to neil@charltondriving.com
require_once '../php-mailer/PHPMailerAutoload.php';
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $email = $form_email;
          $to_name = 'Neil\'s Driving School';
          $from_name = $form_name;
          $from = $form_email;
          $to = 'neil@charltondriving.com';
          $subject = 'Driving Lesson Enquiry';
          
          $message = '<strong>From:</strong> ' . $form_name . '<br><br>';
          
          $message .= '<strong>Email:</strong> ' . $form_email . '<br><br>';
          $message .= '<strong>Address: </strong>' . $form_address . '<br><br>';
          $message .= '<strong>Enquiry:</strong><br> ' . $form_enquiry . '<br>';
          $message .= '<strong>Tel:</strong> ' . $form_tel . '<br><br>';
          
          $mail = new PHPMailer();
          //$mail->IsSMTP();
          $mail->IsHTML(true);
          $mail->Host = 'smtpout.secureserver.net';
          $mail->Port = 80;
          $mail->SMTPAuth = true;
          $mail->Username = 'neil@charltondriving.com';
          $mail->Password = 'godaAdmiral315';
          $mail->FromName = $form_name;
          $mail->From = $form_email;
          $mail->AddAddress($to, $to_name);
          $mail->Subject = $subject;
          $mail->Body = $message;
          $result_mail = $mail->Send();
          
          if(!$mail->Send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else { 
  // if mail has been sent then display a Thank You page
$title = 'Mail Sent';
require_once '../includes/head.php';
require_once '../includes/js_and_css_links.php';
require_once '../includes/nav.php';
?>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>Thank You</h3>
      <p>Your email has been sent. I will reply within 48 hours.&nbsp;<a href="../index.php">Back to Homepage</a></p>
      
    </div>
  </div>
</div>
<?php 
} // end else
} // end else
?>