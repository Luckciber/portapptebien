<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
 * example to see how to use XOAUTH2.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

require_once __DIR__.'/../src/PHPMailer.php';
require_once __DIR__.'/../src/SMTP.php';
require_once __DIR__.'/../src/Exception.php';
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
$mail->Password = "einr uzqz vluw alvy";
$mail->SetFrom("miltonsotocastillo@gmail.com");
$mail->Subject = "Test";
$mail->Body = '
    <head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background-color: #ffffff;
      border: 1px solid #dddddd;
      padding: 30px;
      border-radius: 6px;
      color: #333333;
    }
    .header {
      text-align: center;
      border-bottom: 1px solid #dddddd;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }
    .footer {
      font-size: 12px;
      color: #888888;
      text-align: center;
      border-top: 1px solid #dddddd;
      padding-top: 10px;
      margin-top: 20px;
    }
    .btn {
      display: inline-block;
      padding: 10px 20px;
      margin-top: 20px;
      background-color: #2a8dd2;
      color: #ffffff;
      text-decoration: none;
      border-radius: 4px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Notificación Importante</h2>
    </div>
    <p>Estimado/a <strong>Usuario</strong>,</p>
    <p>Informamos que tiene una citación pendiente para el dia xx/xx/xx a las xx:xx </p>
    <p>Necesitamos convocar al apoderado de XXXXX para que pueda recibir</p>
    <p>información en relacion a la conducta del alumno XXXXX</p>
    
    <p>Gracias por su atención.</p>

    <p>Atentamente,<br><strong>Dirección</strong></p>

    <div class="footer">
      Este mensaje ha sido enviado automáticamente. Por favor, no responda a este correo.
    </div>
  </div>
</body>
    ';
$mail->AddAddress($_SESSION['correo_destino']);
//$mail->AddAddress("fernanda.reyes.ponce@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }