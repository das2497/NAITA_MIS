<?php
require 'email_resources\Exception.php';
require 'email_resources\PHPMailer.php';
require 'email_resources\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{

private static $main_email = "naita3516@gmail.com";
private static $main_password = "liiqsusccazgfdnm";

    public static function send($head, $body, $email)
    {

        try {
            $mail = new PHPMailer();
            $mail->isSMTP(); //Send using SMTP
            $mail->Host       = 'smtp.gmail.com'; //Set the SMTP server to send through
            $mail->SMTPAuth   = true; //Enable SMTP authentication
            $mail->Username   = Email::$main_email; //SMTP username
            $mail->Password   = Email::$main_password; //SMTP password
            $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
            $mail->Port       = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = 

            //Recipients
            $mail->setFrom('counsel.felts-0o@icloud.com', $head);
            $mail->addAddress($email, $head);
            $mail->addReplyTo('counsel.felts-0o@icloud.com', $head);

            // //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);  //Set email format to HTML
            $mail->Subject = $head;
            $mail->Body = $body;
            $mail->AltBody = $body;

            $mail->send();

            return "Successfully sent.";
        } catch (Exception $e) {
            return "Something went wrong.";
        }
    }
}
