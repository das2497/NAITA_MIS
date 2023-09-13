<?php
require 'connection.php';

if (empty($_POST['st_prof_first_name'])) {
    echo 'Please enter first name';
} elseif (empty($_POST['st_prof_last_name'])) {
    echo 'Please enter last name';
} elseif (empty($_POST['st_prof_full_name_with_init'])) {
    echo 'Please enter full name with initials';
} elseif (empty($_POST['st_prof_full_name'])) {
    echo 'Please enter full name';
} elseif (empty($_POST['st_prof_address'])) {
    echo 'Please enter address';
} elseif (empty($_POST['st_prof_gender'])) {
    echo 'Please enter gender';
} elseif (empty($_POST['st_prof_nic'])) {
    echo 'Please enter NIC';
} elseif (empty($_POST['st_prof_mobile'])) {
    echo 'Please enter mobile number';
} elseif (empty($_POST['st_prof_land'])) {
    echo 'Please enter land line number';
} elseif (empty($_POST['st_prof_email'])) {
    echo 'Please enter email';
} elseif (empty($_POST['st_prof_password'])) {
    echo 'Please enter password';
} elseif ($_POST['st_prof_university'] == 'x') {
    echo 'Please select university';
} elseif ($_POST['st_prof_field'] == 'x') {
    echo 'Please select field';
} elseif ($_POST['st_prof_degree'] == 'x') {
    echo 'Please select degree';
} else {

    Database::iud("UPDATE student SET first_name='" . $_POST['st_prof_first_name'] . "',last_name='" . $_POST['st_prof_last_name'] . "',full_name='" . $_POST['st_prof_full_name'] . "'
    ,full_name_with_init='" . $_POST['st_prof_full_name_with_init'] . "',nic='" . $_POST['st_prof_nic'] . "',address='" . $_POST['st_prof_address'] . "',mobile_no='" . $_POST['st_prof_mobile'] . "'
    ,land_line='" . $_POST['st_prof_land'] . "',email='" . $_POST['st_prof_email'] . "',PASSWORD='" . $_POST['st_prof_password'] . "' 
    WHERE nic='" . $_POST['st_prof_nic'] . "' OR email='" . $_POST['st_prof_email'] . "';");

    echo 'success';
}
