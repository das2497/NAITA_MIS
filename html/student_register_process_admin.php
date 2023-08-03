<?php
require "connection.php";

// echo $_POST["ad_st_FName"];
// echo $_POST["ad_st_LName"];
// echo $_POST["ad_st_FullName"];
// echo $_POST["ad_st_FullNameInit"];
// echo $_POST["ad_st_Address"];
// echo $_POST["ad_st_Gender"];
// echo $_POST["ad_st_NIC"];
// echo $_POST["ad_st_Mobile"];
// echo $_POST["ad_st_Landline"];
// echo $_POST["ad_st_Email"];
// echo $_POST["ad_st_Uni"];
// echo $_POST["ad_st_Degree"];
// echo $_POST["ad_st_Field"];
// echo $_POST["ad_st_Pass"];

// $x = rand(10000000, 99999999);
// $UniId =  strval($x);

if (empty($_POST["ad_st_FName"])) {
    echo "Place enter first name";
} elseif (empty($_POST["ad_st_LName"])) {
    echo "Please enter last name";
} elseif (empty($_POST["ad_st_FullName"])) {
    echo "Please enter full name";
} elseif (empty($_POST["ad_st_FullNameInit"])) {
    echo "Please enter full name with initials";
} elseif (empty($_POST["ad_st_Address"])) {
    echo "Place enter address";
} elseif ($_POST["ad_st_Gender"] == 'x') {
    echo "Please select gender";
} elseif (empty($_POST["ad_st_NIC"])) {
    echo "Please enter NIC No";
} elseif (empty($_POST["ad_st_Mobile"])) {
    echo "Please enter mobile number";
} elseif (empty($_POST["ad_st_Landline"])) {
    echo "Please enter land line number";
} elseif (!filter_var($_POST["ad_st_Email"], FILTER_VALIDATE_EMAIL)) {
    echo "Please enter email";
} elseif ($_POST["ad_st_Uni"] == 'x') {
    echo "Please select university or institute";
} elseif ($_POST["ad_st_Degree"] == 'x') {
    echo "Please select degree";
} elseif ($_POST["ad_st_Field"] == 'x') {
    echo "Please select field";
} elseif (empty($_POST["ad_st_Pass"])) {
    echo "Please enter password";
} else {

    $rs = Database::search("SELECT * FROM student WHERE nic='" . $_POST["ad_st_NIC"] . "' AND `email`='" . $_POST["ad_st_Email"] . "';");

    if ($rs->num_rows > 0) {
        echo "This Student already registered";
    } else {

        $fd = Database::search("SELECT * FROM field
        INNER JOIN degree ON field.fld_deg_id=degree.deg_id
        INNER JOIN university ON degree.deg_uni_id=university.uni_id
        WHERE field.fld_name='" . $_POST["ad_st_Field"] . "' AND degree.degree_name='" . $_POST["ad_st_Degree"] . "' AND university.uni_id='" . $_POST["ad_st_Uni"] . "';");

        if ($fd->num_rows > 0) {
            $field = $fd->fetch_assoc();
            $today = date("Y-m-d");
            Database::iud("INSERT INTO student(first_name,last_name,full_name,full_name_with_init,nic,address,mobile_no,land_line,email,PASSWORD,reg_date,gender_gn_id,field_fld_id)
            VALUES('" . $_POST["ad_st_FName"] . "','" . $_POST["ad_st_LName"] . "','" . $_POST["ad_st_FullName"] . "','" . $_POST["ad_st_FullNameInit"] . "','" . $_POST["ad_st_NIC"] . "','" . $_POST["ad_st_Address"] . "',
            '" . $_POST["ad_st_Mobile"] . "','" . $_POST["ad_st_Landline"] . "','" . $_POST["ad_st_Email"] . "','" . $_POST["ad_st_Pass"] . "','" . $today . "','" . $_POST["ad_st_Gender"] . "','" . $field['fld_id'] . "');");

            echo "success";
        } else {
            echo "No field with this details";
        }
    }
}
