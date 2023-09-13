<?php

require 'connection.php';

if (empty($_POST['admin_add_admin_uname'])) {
    echo "Please enter Username";
} elseif (empty($_POST['admin_add_admin_name'])) {
    echo "Please enter Name";
} elseif (empty($_POST['admin_add_admin_nic'])) {
    echo "Please enter NIC";
} elseif ($_POST['admin_add_admin_gender'] == 'x') {
    echo "Please select Gender";
} elseif ($_POST['admin_add_admin_adtype'] == 'x') {
    echo "Please select Admin type";
} elseif (empty($_POST['admin_add_admin_password'])) {
    echo "Please enter Password";
} else {

    $rs1 = Database::search("SELECT * FROM `admin` WHERE ad_nic='" . $_POST['admin_add_admin_nic'] . "';");

    if ($rs1->num_rows == 0) {
        Database::iud("INSERT INTO admin(uname,NAME,ad_nic,ad_gn_id,ad_admin_typ_id,ad_pass) 
        VALUES ('" . $_POST['admin_add_admin_uname'] . "','" . $_POST['admin_add_admin_name'] . "','" . $_POST['admin_add_admin_nic'] . "','" . $_POST['admin_add_admin_gender'] . "','" . $_POST['admin_add_admin_adtype'] . "','" . $_POST['admin_add_admin_password'] . "');");
        echo "success";
    } else {
        echo "This admin already registered!";
    }
}
