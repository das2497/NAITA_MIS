<?php
session_start();
require 'connection.php';

if (empty($_POST["uname"])) {
    echo "Please enter Username";
} elseif (empty($_POST["pass"])) {
    echo "Please enter Password";
} else {

    $rs1 = Database::search("SELECT admin.ad_id, admin.uname, admin.name, admin.ad_nic, gender.gender_type, admin_type.admn_typ FROM admin
    INNER JOIN admin_type ON admin.ad_admin_typ_id=admin_type.admn_typ_id
    INNER JOIN gender ON admin.ad_gn_id=gender.gn_id
    WHERE admin.uname='" . $_POST["uname"] . "' AND admin.ad_pass='" . $_POST["pass"] . "';");

    $rs2 = Database::search("SELECT * FROM student
    WHERE email='" . $_POST["uname"] . "' AND PASSWORD='" . $_POST["pass"] . "';");

    if (!empty($rs1) && $rs1->num_rows > 0) {
        $d = $rs1->fetch_assoc();

        if ($d["admn_typ"] == "Super Admin") {
            $_SESSION["SA"] = $d;
            echo "1";
        } elseif ($d["admn_typ"] == "Admin") {
            $_SESSION["AD"] = $d;
            echo "1";
        }
    } elseif (!empty($rs2) && $rs2->num_rows > 0) {
        $_SESSION["ST"] = $rs2->fetch_assoc();
        echo "2";
    } else {
        echo "Invalid Username Or Password ";
    }

    // if ($rs->num_rows == 0) {
    //     echo "Invalid Username Or Password ";
    // } else {
    //     $d = $rs1->fetch_assoc();

    //     if ($d["admn_typ"] == "Super Admin") {
    //         $_SESSION["SA"] = $d;
    //           echo "Success";
    //     } elseif ($d["admn_typ"] == "Admin") {
    //         $_SESSION["AD"] = $d;
    //           echo "Success";
    //     }
    // }
}
