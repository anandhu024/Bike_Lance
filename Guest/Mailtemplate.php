
<?php
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
require 'PHPMailer/src/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
$mail = new PHPMailer; 
$mail->isSMTP(); // Set mailer to use SMTP 
$mail->Host = 'smtp.sendgrid.net'; // Specify main and backup SMTP servers 
$mail->SMTPAuth = true; // Enable SMTP authentication 
$mail->Username = 'apikey'; // SMTP username
$mail->Password = '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'; // SMTP password 
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to 
// Sender info 
$mail->setFrom('ssttrainingprojects@gmail.com', 'Bike Lance'); 
$mail->addReplyTo('ssttrainingprojects@gmail.com',  'Bike Lance'); 
// Add a recipient 
$mail->addAddress($mailtoaddress); 
$mail->isHTML(true); 
// Mail subject 
$mail->Subject = 'Registered successfully '; 
// Mail body content 
$mail->Body = $bodyContent; 
// Send email 
if(!$mail->send()) { 
echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
echo 'Message has been sent.'; 
} 
?>