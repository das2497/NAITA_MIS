<?php
require 'connection.php';
require 'email_sender.php';
require 'email_body.php';

$rs = Database::search("SELECT *
FROM FIELD
JOIN degree ON field.fld_deg_id=degree.deg_id
JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_POST['uni_id'] . "' AND degree.deg_id='" . $_POST['deg_id'] . "' AND field.fld_id='" . $_POST['field_id'] . "';");

// echo "SELECT *
// FROM FIELD
// JOIN degree ON field.fld_deg_id=degree.deg_id
// JOIN university ON degree.deg_uni_id=university.uni_id
// WHERE university.uni_id='" . $_POST['uni_id'] . "' AND degree.deg_id='" . $_POST['deg_id'] . "' AND field.fld_id='" . $_POST['field_id'] . "';";

// if ($rs->num_rows != 0) {

$d = $rs->fetch_assoc();

$e_header = Email_BODY::$student_registration_header;
$e_body = Email_BODY::student_registration_individual($d['uni_name'], $d['degree_name'], $d['fld_name']);

echo Email::send($e_header, $e_body, $d['uni_email']);
// }
