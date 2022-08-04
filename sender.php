<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$path_to = "PHPMailer";
require "$path_to/src/Exception.php";
require "$path_to/src/PHPMailer.php";
require "$path_to/src/SMTP.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = "email@gmail.com";
$mail->Password = "password";
$mail->SetFrom("example@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("email@gmail.com");

if(!$mail->Send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
} else {
   echo "Message has been sent";
}
