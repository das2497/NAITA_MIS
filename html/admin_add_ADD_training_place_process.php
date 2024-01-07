<?php
require_once 'connection.php';

if (empty($_POST['admin_add_training_place_name'])) {
    echo "Please enter training place name";
} elseif (empty($_POST['admin_add_training_place_address'])) {
    echo "Please enter address";
} elseif (empty($_POST['admin_add_training_place_email'])) {
    echo "Please enter email";
} elseif (empty($_POST['admin_add_training_place_contact_1'])) {
    echo "Please enter contact 1";
} elseif (empty($_POST['admin_add_training_place_contact_2'])) {
    echo "Please enter contact 2";
} elseif ($_POST['admin_add_training_place_district'] == 'x') {
    echo "Please select district";
} elseif (empty($_POST['admin_add_training_place_coordinator'])) {
    echo "Please enter coordinator's name";
} elseif (empty($_POST['admin_add_training_place_coordinator_position'])) {
    echo "Please enter coordinator's position";
} else {
    Database::iud("INSERT INTO training_place(tran_plc_name,tran_plc_address,tran_plc_email,tran_plc_contact1,tran_plc_contact2,tran_plc_pass,districts_district_id,tran_coordinator,tran_coordinator_position)
    VALUES('" . $_POST['admin_add_training_place_name'] . "','" . $_POST['admin_add_training_place_address'] . "','','" . $_POST['admin_add_training_place_email'] . "'
    ,'" . $_POST['admin_add_training_place_contact_1'] . "','" . $_POST['admin_add_training_place_contact_2'] . "','" . $_POST['admin_add_training_place_district'] . "'
    ,'" . $_POST['admin_add_training_place_coordinator'] . "','" . $_POST['admin_add_training_place_coordinator_position'] . "');");
    echo "success";
}
