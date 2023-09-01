<?php
require 'connection.php';

// admin_indi_uni_name
// admin_indi_uni_contact_1
// admin_indi_uni_contact_2
// admin_indi_uni_email
// admin_indi_uni_password

if (empty($_POST['admin_indi_uni_name'])) {
    echo 'Please enter university name';
} elseif (empty($_POST['admin_indi_uni_contact_1'])) {
    echo 'Please enter university contact 1';
} elseif (empty($_POST['admin_indi_uni_email'])) {
    echo 'Please enter university email';
} elseif (empty($_POST['admin_indi_uni_password'])) {
    echo 'Please enter university password';
} else {

    $rs1 = Database::search("SELECT * FROM university
    WHERE uni_name='" . $_POST['admin_indi_uni_name'] . "' AND uni_email='" . $_POST['admin_indi_uni_name'] . "';");

    if ($rs1->num_rows == 0) {
        Database::iud("UPDATE university SET uni_name='" . $_POST['admin_indi_uni_name'] . "', 
        uni_email='" . $_POST['admin_indi_uni_email'] . "',
         uni_contact_1='" . $_POST['admin_indi_uni_contact_1'] . "',
         uni_contact_2='" . $_POST['admin_indi_uni_contact_2'] . "' 
         WHERE uni_name='" . $_POST['admin_indi_uni_name'] . "';");
        echo 'success';
    } else {
        echo 'This university already registered';
    }
}
