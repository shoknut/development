<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        // je crée une instance de la classe PHPMailer
        $mail = new PHPMailer(true);


        try {
            //Server settings
            $mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'monsieurcul3wa@gmail.com';                 // SMTP username
            $mail->Password = 'proutman';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            // expediteur
            $mail->setFrom("monsieurcul3wa@gmail.com", 'Mailer');
            $mail->addAddress('monsieurcul3wa@gmail.com', 'Morgan');     // Add a recipient


            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = $formFields["content"]." envoyé par : ".$formFields["email"];
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

        $http->redirectTo("/");
    }
}