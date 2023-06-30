<?php

require 'connection.php';

if ($_POST["monit_phase"] == "0") {
    echo "Please Select Monitoring Phase";
} else {

    Database::iud("UPDATE " . $_POST["monit_phase"] . " SET super_stat='1' WHERE mn_ins_id='" . $_POST["ins_id"] . "';");

    echo "success";
}
