
<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);

try {
    // Configurar la autenticación SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'miltonsotoc@gmail.com';
    $mail->Password = 'Yb8s6uum';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';

    // Configurar el correo
    $mail->setFrom('miltonsotoc@gmail.com', 'Envio automático');
    $mail->addAddress('miltonsotocastillo@ejemplo.com', 'Usuario Destino');
    $mail->Subject = 'Asunto de prueba';
    $mail->Body = 'Cuerpo de prueba';

    // Enviar el correo
    $mail->send();
    echo 'Correo enviado correctamente';
} catch (Exception $e) {
    echo 'Error al enviar el correo: ' . $e->getMessage();
}
?>