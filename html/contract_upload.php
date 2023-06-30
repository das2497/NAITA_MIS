<?php

require 'connection.php';

// echo "kkkkk".$_POST["link"];


// $email = $_POST["email"];

if (isset($_FILES["file"])) {

    $file = $_FILES["file"];

    $allowed_image_extensions = array("application/pdf");

    if (in_array($file["type"], $allowed_image_extensions)) {

        $file_name = "traineecontract/" . uniqid() . $file["name"];
        move_uploaded_file($file["tmp_name"], $file_name);

        // echo $file_name;

        $rs = Database::search("SELECT * FROM contract;");
        $n = $rs->num_rows;

        if ($n > 0) {
            $d = $rs->fetch_assoc();
            unlink($d["path"]);
            Database::iud("UPDATE contract SET `path`='" . $file_name . "';");
            echo "Successfully Uploaded Contract Form";
        } else {
            Database::iud("INSERT INTO contract(`path`) VALUE('" . $file_name . "');");
            echo "Successfully Uploaded Contract Form";
            echo "INSERT INTO contract(`path`) VALUE('" . $file_name . "');";
        }
    } else {
        echo "Invalid file type";
    }
}
