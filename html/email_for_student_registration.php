<?php

require 'email_sender.php';
require 'email_body.php';

$e_header = Email_BODY::$student_registration_header;
$e_body = Email_BODY::$student_registration;

echo Email::send($e_header,$e_body,$_POST['email']);