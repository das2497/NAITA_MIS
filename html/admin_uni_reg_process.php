<?php

require 'connection.php';

// echo $_POST['admin_uni_reg_uni_type'];
// echo ' ';
// echo $_POST['admin_uni_reg_uni'];
// echo ' ';
// echo $_POST['admin_uni_reg_uni_gov'];
// echo ' ';
// echo $_POST['admin_uni_reg_uni_addr'];
// echo ' ';
// echo $_POST['admin_uni_reg_uni_email'];
// echo ' ';
// echo $_POST['admin_uni_reg_uni_teli_1'];
// echo ' ';
// echo $_POST['admin_uni_reg_uni_teli_2'];
// echo ' ';
// echo $_POST['admin_uni_reg_uni_pass'];

if ($_POST['admin_uni_reg_uni_type'] == 'x') {
    echo 'Please select university type';
} else if (empty($_POST['admin_uni_reg_uni'])) {
    echo 'Please enter university name';
} else if ($_POST['admin_uni_reg_uni_gov'] == 'x') {
    echo 'Please select government or not';
} else if (empty($_POST['admin_uni_reg_uni_addr'])) {
    echo 'Please enter university address';
} else if (empty($_POST['admin_uni_reg_uni_email'])) {
    echo 'Please enter university email';
} else if (empty($_POST['admin_uni_reg_uni_teli_1'])) {
    echo 'Please enter telephone no 1';
} else if (empty($_POST['admin_uni_reg_uni_teli_2'])) {
    echo 'Please enter telephone no 2';
} else if (empty($_POST['admin_uni_reg_uni_pass'])) {
    echo 'Please enter password';
} else {

    $rs1 = Database::search("SELECT * FROM university WHERE uni_name='" . $_POST['admin_uni_reg_uni'] . "' AND uni_email='" . $_POST['admin_uni_reg_uni_email'] . "';");

    if ($rs1->num_rows == 0) {
        Database::iud("INSERT INTO university(uni_name,uni_email,uni_contact_1,uni_contact_2,uni_type_uni_typ_id,gov_status_govstat_id,uni_pass)
        VALUES ('" . $_POST['admin_uni_reg_uni'] . "','" . $_POST['admin_uni_reg_uni_email'] . "','" . $_POST['admin_uni_reg_uni_teli_1'] . "','" . $_POST['admin_uni_reg_uni_teli_2'] . "','" . $_POST['admin_uni_reg_uni_type'] . "','" . $_POST['admin_uni_reg_uni_gov'] . "','" . $_POST['admin_uni_reg_uni_pass'] . "');");
        echo "success";
    } else {
        echo "This university already registered";
    }
}
