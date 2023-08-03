<?php
require 'connection.php';

if (empty($_POST["nt_id"])) {
    echo "Please enter NAITA ID";
} else {
    Database::iud("UPDATE student SET naita_id='" . $_POST["nt_id"] . "' WHERE nic='" . $_POST["nic"] . "';");
    echo "success";
}
