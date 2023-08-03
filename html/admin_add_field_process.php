<?php

require 'connection.php';

if ($_POST['admin_add_field_deg'] == 'x') {
    echo 'Please select Degree';
} else if (empty($_POST['admin_add_field_field'])) {
    echo 'Please enter field';
} else {
    $rs1 = Database::search("SELECT * FROM field WHERE fld_name='" . $_POST['admin_add_field_field'] . "' AND fld_deg_id='" . $_POST['admin_add_field_deg'] . "';");

    if ($rs1->num_rows == 0) {
        Database::iud("INSERT INTO field(fld_name,fld_deg_id) VALUES ('" . $_POST['admin_add_field_field'] . "','" . $_POST['admin_add_field_deg'] . "');");
        echo "success";
    } else {
        echo "This field already registered";
    }
}
