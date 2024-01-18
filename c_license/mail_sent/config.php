<?php
//require 'D:\xampp\htdocs\mail_sent\phpmailer\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");
$mail = new  PHPMailer\PHPMailer\PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username = 'compliance@mascoknit.com';
$mail->Password = 'C0mpli@nce#321';
$mail->SetFrom('compliance@mascoknit.com', 'Auto Mail Sent');
$mail->addAddress('asad@mascogrp.com');
//$mail->addAddress('hr_mcl@mascoknit.com', 'Saiful');
//$mail->addAddress('nur_mcl@mascoknit.com', 'Nur Mohammod');
$mail->addCC('mainul@mascoknit.com');
$mail->addCC('serazul@mascogrp.com');
$mail->addCC('tanver_mcl@mascoknit.com');
$mail->addCC('admin_tex@mascoknit.com');
$mail->addCC('arnaf_comp@mascoknit.com');
$mail->addCC('zamshad@mascoknit.com');
$mail->addCC('hr_mcl@mascoknit.com');
$mail->addCC('nur_mcl@mascoknit.com');
$mail->addCC('mushfeq_mcl@mascoknit.com');
//$mail->SMTPDebug  = 3;
//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
$mail->IsHTML(true);

$mail->Subject = 'License Renewal';
$mail->Body    = 'Please follow the above attached pdf license file and need to renewal within timeline.For more details visit the link,http://192.168.50.70/cotton_license/.This mail auto generate please donot reply.';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->addAttachment('C:\Users\Administrator\Downloads\cotton_license.pdf'); // Optional name

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}