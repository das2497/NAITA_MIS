<?php

require 'connection.php';

session_start();

// echo $_POST['st_id'] . " " . $_POST['mtd'] . " " . $_POST['ins_id'];

if (empty($_POST['mtd'])) {
    echo "Please select monitoring date";
} else {

    if ($_POST["monit_stat"] == 5) {
        echo "This Student's Monitoring And Assessments Are Completed";
    } else {

        $_POST["monit_stat"];

        $rs1 = Database::search("SELECT * FROM selected_to_assess WHERE sltd_asses_student='" . $_POST['st_id'] . "';");

        if ($rs1->num_rows > 0) {
            echo "This Student Already Selected";

            Database::iud("DELETE FROM selected_to_assess WHERE sltd_asses_student='" . $_POST["st_id"] . "' AND sltd_asses_inspector='" . $_POST["ins_id"] . "';");

            // sleep(1);

            $rs2 = Database::search("INSERT INTO selected_to_assess(sltd_asses_date,sltd_asses_student,sltd_asses_inspector,sltd_asses_status,sltd_asses_approved) 
            VALUES ('" . $_POST["mtd"] . "','" . $_POST["st_id"] . "','" . $_POST["ins_id"] . "','" . $_POST["monit_stat"] . "','0');");

        } else {

            $rs2 = Database::search("INSERT INTO selected_to_assess(sltd_asses_date,sltd_asses_student,sltd_asses_inspector,sltd_asses_status,sltd_asses_approved) 
            VALUES ('" . $_POST["mtd"] . "','" . $_POST["st_id"] . "','" . $_POST["ins_id"] . "','" . $_POST["monit_stat"] . "','0');");

            echo "Success";
        }
    }
}
