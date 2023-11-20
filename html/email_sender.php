<?php
// require 'email_resources\Exception.php';
// require 'email_resources\PHPMailer.php';
// require 'email_resources\SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// class Email
// {

// private static $main_email = "naita3516@gmail.com";
// private static $main_password = "liiqsusccazgfdnm";

//     public static function send($head, $body, $email)
//     {

//         try {
//             $mail = new PHPMailer();
//             $mail->isSMTP(); //Send using SMTP
//             $mail->Host       = 'smtp.gmail.com'; //Set the SMTP server to send through
//             $mail->SMTPAuth   = true; //Enable SMTP authentication
//             $mail->Username   = Email::$main_email; //SMTP username
//             $mail->Password   = Email::$main_password; //SMTP password
//             $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
//             $mail->Port       = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = 

//             //Recipients
//             $mail->setFrom('counsel.felts-0o@icloud.com', $head);
//             $mail->addAddress($email, $head);
//             $mail->addReplyTo('counsel.felts-0o@icloud.com', $head);

//             // //Attachments
//             // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//             // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//             //Content
//             $mail->isHTML(true);  //Set email format to HTML
//             $mail->Subject = $head;
//             $mail->Body = $body;
//             $mail->AltBody = $body;

//             $mail->send();

//             return "Successfully sent.";
//         } catch (Exception $e) {
//             return "Something went wrong.";
//         }
//     }
// }

########################################################################################


require 'email_resources/Exception.php';
require 'email_resources/PHPMailer.php';
require 'email_resources/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private static $main_email = "naita3516@gmail.com";
    private static $main_password = "liiqsusccazgfdnm";

    public static function send($head, $body, $email)
    {
        try {
            $mail = new PHPMailer(true);
            $mail->isSMTP(); // Send using SMTP
            $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = Email::$main_email; // SMTP username
            $mail->Password   = Email::$main_password; // SMTP password
            $mail->SMTPSecure = 'tls'; // Enable explicit TLS encryption
            $mail->Port       = 587; // TCP port to connect to; use 587 with TLS

            // Recipients
            $mail->setFrom('counsel.felts-0o@icloud.com', $head);
            $mail->addAddress($email);
            $mail->addReplyTo('counsel.felts-0o@icloud.com', $head);

            // Content
            $mail->isHTML(true);  // Set email format to HTML
            $mail->Subject = $head;
            $mail->Body = $body;
            $mail->AltBody = strip_tags($body);

            // Send email
            $mail->send();

            return "Email sent successfully.";
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
        }
    }
}

// // Test sending an email
// $result = Email::send('Test Subject', '<h4>Hello</h4>', 'danushkasandagiri@gmail.com');
// echo $result;
