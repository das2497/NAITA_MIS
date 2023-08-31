<?php


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
    echo "success";
}
