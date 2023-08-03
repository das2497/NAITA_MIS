<?php
require 'connection.php';

// echo $_POST['admin_add_deg_uni'];
// echo $_POST['admin_add_deg_deg'];
// echo $_POST['admin_add_deg_deg_other'];

if ($_POST['admin_add_deg_uni'] == 'x') {
    echo 'Please select university';
} else if ($_POST['admin_add_deg_deg'] == 'x') {
    echo 'Please select degree';
} else if ($_POST['admin_add_deg_deg'] == 'y' && empty($_POST['admin_add_deg_deg_other'])) {
    echo 'Please enter other degree';
} else {

    $rs1 = Database::search("SELECT * FROM degree WHERE degree_name='" . $_POST['admin_add_deg_deg'] . "' AND deg_uni_id='" . $_POST['admin_add_deg_uni'] . "';");

    if ($rs1->num_rows == 0) {

        if ($_POST['admin_add_deg_deg'] == 'y') {
            Database::iud("INSERT INTO degree(degree_name,deg_uni_id) VALUES ('" . $_POST['admin_add_deg_deg_other'] . "','" . $_POST['admin_add_deg_uni'] . "');");
            echo 'success';
        } else {
            Database::iud("INSERT INTO degree(degree_name,deg_uni_id) VALUES ('" . $_POST['admin_add_deg_deg'] . "','" . $_POST['admin_add_deg_uni'] . "');");
            echo 'success';
        }
    } else {
        echo 'This degree already have';
    }
}
