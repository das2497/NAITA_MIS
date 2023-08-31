<?php
require 'connection.php';
require 'email_sender.php';
require 'email_body.php';

$head = Email_BODY::$training_establishment_head;

$rs1 = Database::search("SELECT * FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_POST['uni_id'] . "';");

while ($d1 = $rs1->fetch_assoc()) {

    $rs2 = Database::search("SELECT * FROM student
    INNER JOIN training_establishment ON student.st_id=training_establishment.tran_est_st_id
    WHERE training_establishment.tran_est_st_id='" . $d1["st_id"] . "';");


    if ($rs2->num_rows == 0) {
        $stid = $d1["st_id"];
        echo $body = Email_BODY::training_establishment_body($stid);
        Email::send($head, $body, $d1['email']);
    }
}

echo "successfully sent";
