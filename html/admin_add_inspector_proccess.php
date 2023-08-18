<?php
require 'connection.php';

if ($_POST['admin_add_inspector'] == 'x') {
    echo 'Please select a admin';
} else {

    $rs = Database::search("SELECT * FROM inspector WHERE admin_ad_id='" . $_POST['admin_add_inspector'] . "';");

    if ($rs->num_rows > 0) {
        echo 'This admin already inspector';
    } else {
        Database::iud("INSERT INTO inspector(admin_ad_id) VALUES ('" . $_POST['admin_add_inspector'] . "');");
        echo 'success';
    }
}
