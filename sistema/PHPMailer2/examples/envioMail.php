<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

require_once '../src/PHPMailer.php';
require_once '../src/SMTP.php';
require_once '../src/Exception.php';
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer();
$mail->IsSMTP(); // habilita SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errores y mensajes, 2 = sólo mensajes
$mail->SMTPAuth = true; // auth habilitada
$mail->SMTPSecure = 'tls'; // transferencia segura REQUERIDA para Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; // or 587
$mail->IsHTML(true);
$mail->Username = "miltonsotocastillo@gmail.com";
$mail->Password = "bogefdisptrpmffc";
$mail->SetFrom("miltonsotocastillo@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("mvillarroelg@hotmail.com");
//$mail->AddAddress("fernanda.reyes.ponce@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
