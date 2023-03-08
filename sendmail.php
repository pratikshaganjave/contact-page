<?php

require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
  if (isset($_POST['name']) && isset($_POST['email'])) 
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];

    $mail = new PHPMailer();
	$mail->isSMTP();

	$mail->Host = "smtp.gmail.com";

	$mail->SMTPAuth = true;

	$mail->SMTPSecure = "tls";

	$mail->Port = "587";

	$mail->Username = "demomailer511@gmail.com";

	$mail->Password = "ulssnffozzrfhorb";

	$mail->Subject= ("$email ($subject)");

	$mail->setFrom($email, $name);

	$mail->isHTML(true);

	$mail->Body =$body;

	$mail->addAddress('demomailer511@gmail.com');

	if ( $mail->send() )
     {
		echo "Email Sent..!";
	}
    else
    {
		echo "Message could not be sent. Mailer Error: ";
	}

	$mail->smtpClose();
}

?>
