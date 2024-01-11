<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    function send_email($email, $asunto, $mensaje) {
        $mail = new PHPMailer();
        $mail->isSmtp();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '611bcd47e1e6e1';
        $mail->Password = '7c4e6f18b00d71';
        $mail->Port = 25;
        $mail->SMTPSecure = 'tls';
        $mail->isHTML(true);
        $mail->Charset = 'UTF-8';

        $mail->setFrom('registro@mipagina.com', 'Registro');
  
        $mail->addAddress($email);
        $mail->Subject = $asunto;
        $mail->Body = $mensaje;

        if($mail->send()){
            $emailSent = true;
        }
    }

?>