<?php
// header("Location: http://127.0.0.1/ttest/getdisk");




// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\SMTP;

// require 'phpMailer/Exception.php';
// require 'phpMailer/PHPMailer.php';
// require 'phpMailer/SMTP.php';

// //Create an instance; passing `true` enables exceptions
// $mail = new PHPMailer(true);

// try {
// 	//Server settings
// 	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
// 	$mail->isSMTP();                                            //Send using SMTP
// 	$mail->Host       = 'send.one.com';                     //Set the SMTP server to send through
// 	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
// 	$mail->Username   = 'no-reply@force-elektro.nl';                     //SMTP username
// 	$mail->Password   = 'Ph9Du5uJo*t*v8spo7$D';                               //SMTP password
// 	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
// 	$mail->Port       = 25;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
// 	$mail->SMTPAutoTLS = false; // IMPORTANT!!
// 	$mail->SMTPSecure = 'none'; // IMPORTANT!!


// 	//Recipients
// 	$mail->setFrom('no-reply@force-elektro.nl', 'no-reply@force-elektro.nl');
// 	// $mail->addAddress('tomottogeerling@gmail.com', 'Tom');     //Add a recipient
// 	// $mail->addAddress('board@force-elektro.nl');               //Name is optional
// 	// $mail->addReplyTo('info@example.com', 'Information');
// 	$mail->addCC('tomottogeerling@gmail.com');
// 	// $mail->addBCC('bcc@example.com');

// 	//Attachments
// 	// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
// 	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

// 	//Content
// 	$mail->isHTML(true);                                  //Set email format to HTML
// 	$mail->Subject = 'Hello World! from the force-elektro webmailer!';
// 	$mail->Body    = 'Testing the capabilitys of the website. Sincerely Tom G';
// 	$mail->AltBody = 'Testing the capabilitys of the website. Sincerely Tom G';

// 	$mail->send();
// 	echo 'Message has been sent';
// } catch (Exception $e) {
// 	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

