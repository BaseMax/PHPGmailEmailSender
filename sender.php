<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$path_to = "PHPMailer";
require "$path_to/src/Exception.php";
require "$path_to/to/PHPMailer/src/PHPMailer.php";
require "$path_to/to/PHPMailer/src/SMTP.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl'; // tls
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->IsHTML(true);
$mail->Username = "username@gmail.com";
$mail->Password = "password";
$mail->SetFrom("username@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("username@gmail.com");

if (!$mail->Send()) {
   echo "Mailer Error: " . $mail->ErrorInfo;
}
else {
   echo "Message has been sent";
}
