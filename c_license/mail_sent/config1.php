<?php
//require 'D:\xampp\htdocs\mail_sent\phpmailer\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");
$mail = new  PHPMailer\PHPMailer\PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port       = 587;
//$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = false;
$mail->Username = 'maitreefreelancing@gmail.com';
$mail->Password = 'UNdefinedsymbolcosmos09matrix';
$mail->SetFrom('maitreefreelancing@gmail.com', 'FromEmail');
$mail->addAddress('admin@lokiee.com', 'ToEmail');
$mail->SMTPDebug  = 2;
//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
$mail->IsHTML(true);

$mail->Subject = 'Test mail with attatchment';
$mail->Body    = 'This is test mail with pdf file';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//$mail->addAttachment('C:\Users\Mizanur\Downloads\filename.pdf'); // Optional name

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}