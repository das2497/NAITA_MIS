<?php
require 'connection.php';

if (empty($_POST["st_st_FName"])) {
    echo "Place enter first name";
} elseif (empty($_POST["st_st_LName"])) {
    echo "Please enter last name";
} elseif (empty($_POST["st_st_FullName"])) {
    echo "Please enter full name";
} elseif (empty($_POST["st_st_FullNameInit"])) {
    echo "Please enter full name with initials";
} elseif (empty($_POST["st_st_Address"])) {
    echo "Place enter address";
} elseif ($_POST["st_st_Gender"] == 'x') {
    echo "Please select gender";
} elseif (empty($_POST["st_st_NIC"])) {
    echo "Please enter NIC No";
} elseif (empty($_POST["st_st_Mobile"])) {
    echo "Please enter mobile number";
} elseif (empty($_POST["st_st_Landline"])) {
    echo "Please enter land line number";
} elseif (!filter_var($_POST["st_st_Email"], FILTER_VALIDATE_EMAIL)) {
    echo "Please enter email";
} elseif ($_POST["st_st_Uni"] == 'x') {
    echo "Please select university or institute";
} elseif ($_POST["st_st_Degree"] == 'x') {
    echo "Please select degree";
} elseif ($_POST["st_st_Field"] == 'x') {
    echo "Please select field";
} elseif (empty($_POST["st_st_Pass"])) {
    echo "Please enter password";
} elseif (empty($_POST["st_st_Pass_confrm"])) {
    echo "Please enter confirm password";
} elseif ($_POST["st_st_Pass"] !== $_POST["st_st_Pass_confrm"]) {
    echo "Password doesn't match";
} else {

    $rs = Database::search("SELECT * FROM student WHERE nic='" . $_POST["st_st_NIC"] . "' AND `email`='" . $_POST["st_st_Email"] . "';");

    if ($rs->num_rows > 0) {
        echo "You're already registered";
    } else {

        $fd = Database::search("SELECT * FROM field
        INNER JOIN degree ON field.fld_deg_id=degree.deg_id
        INNER JOIN university ON degree.deg_uni_id=university.uni_id
        WHERE field.fld_name='" . $_POST["st_st_Field"] . "' AND degree.degree_name='" . $_POST["st_st_Degree"] . "' AND university.uni_id='" . $_POST["st_st_Uni"] . "';");

        if ($fd->num_rows > 0) {
            $field = $fd->fetch_assoc();
            $today = date("Y-m-d");
            Database::iud("INSERT INTO student(first_name,last_name,full_name,full_name_with_init,nic,address,mobile_no,land_line,email,PASSWORD,reg_date,gender_gn_id,field_fld_id)
            VALUES('" . $_POST["st_st_FName"] . "','" . $_POST["st_st_LName"] . "','" . $_POST["st_st_FullName"] . "','" . $_POST["st_st_FullNameInit"] . "','" . $_POST["st_st_NIC"] . "','" . $_POST["st_st_Address"] . "',
            '" . $_POST["st_st_Mobile"] . "','" . $_POST["st_st_Landline"] . "','" . $_POST["st_st_Email"] . "','" . $_POST["st_st_Pass"] . "','" . $today . "','" . $_POST["st_st_Gender"] . "','" . $field['fld_id'] . "');");

            setcookie(md5('st_st_register'), md5('st_st_register'), time() + 315360000);

            echo "success";
        } else {
            echo "No field with this details";
        }
    }
}
