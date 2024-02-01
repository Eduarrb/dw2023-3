<?php

    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

    // // require 'vendor/autoload.php';

    // function send_email($email, $asunto, $mensaje) {
    //     $mail = new PHPMailer();
    //     $mail->isSmtp();
    //     $mail->Host = 'sandbox.smtp.mailtrap.io';
    //     $mail->SMTPAuth = true;
    //     $mail->Username = '611bcd47e1e6e1';
    //     $mail->Password = '7c4e6f18b00d71';
    //     $mail->Port = 25;
    //     $mail->SMTPSecure = 'tls';
    //     $mail->isHTML(true);
    //     $mail->Charset = 'UTF-8';

    //     $mail->setFrom('registro@mipagina.com', 'Registro');
  
    //     $mail->addAddress($email);
    //     $mail->Subject = $asunto;
    //     $mail->Body = $mensaje;

    //     if($mail->send()){
    //         $emailSent = true;
    //     }
    // }

    function send_email($email, $asunto, $mensaje, $name = ''){
        $email = $email;
        $name = $name;
        $body = "
            <h3>$asunto</h3>
            <br>
            <p>$mensaje</p>
            <br>
        ";

        $headers = array(
            'Authorization: Bearer <token aqui>',
            'Content-Type: application/json'
        );

        $data = array(
            "personalizations" => array(
                array(
                    "to" => array(
                        array(
                            "email" => $email,
                            "name" => $name
                        )
                    )
                )
            ),
            "from" => array(
                "email" => "noreply@cms2024-1.site"
            ),
            "subject" => $asunto,
            "content" => array(
                array(
                    "type" => "text/html",
                    "value" => $body
                )
            )
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.sendgrid.com/v3/mail/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
    }

?>