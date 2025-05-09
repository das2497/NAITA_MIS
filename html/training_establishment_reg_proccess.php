<?php

require 'connection.php';


if ($_POST['st_trn_training_place'] == 'x') {
    echo 'Please select training place';
} elseif ($_POST['st_trn_worksite'] == 'x') {
    echo 'Please select worksite';
} elseif (empty($_POST['st_trn_start_date'])) {
    echo 'Please select start date';
} elseif (empty($_POST['st_trn_coordinator'])) {
    echo 'Please enter coordinator name';
} elseif (empty($_POST['st_trn_coordinator_position'])) {
    echo 'Please enter coordinator position';
} elseif (empty($_POST['st_trn_coordinator_contact'])) {
    echo 'Please enter coordinator contact number';
} else {

    $rs1 = Database::search("SELECT * FROM training_establishment WHERE tran_est_st_id='" . $_POST['st_id'] . "';");

    if ($rs1->num_rows == 0) {

        $rs_worksit = Database::search("SELECT * FROM worksite WHERE wrksit_tran_plc_id='" . $_POST['st_trn_training_place'] . "';");

        if ($rs_worksit->num_rows == 0) {
            echo "This Worksite Unavailable";
        } else {

            $rs_worksit = $rs_worksit->fetch_assoc();

            $dateTime = new DateTime($_POST['st_trn_end_date']);
            $dateTime->modify('+1 day');
            $efective_date = $dateTime->format('Y-m-d');

            $dateTime2 = new DateTime($_POST['st_trn_end_date']);
            $dateTime2->modify('+6 months');
            $end_date = $dateTime2->format('Y-m-d');

            Database::iud("INSERT INTO `training_establishment`(tran_est_from,tran_est_to,tran_efective_date,tran_est_st_id,worksite_wrksit_id,tran_perion,tran_monit_stat_id,tran_coordinator,tran_coordinator_position,tran_coordinator_contact) 
        VALUES('" . $_POST['st_trn_start_date'] . "','" . $end_date . "','" . $efective_date . "','" . $_POST['st_id'] . "','" . $rs_worksit['wrksit_id'] . "','1','1','" . $_POST['st_trn_coordinator'] . "','" . $_POST['st_trn_coordinator_position'] . "','" . $_POST['st_trn_coordinator_contact'] . "');");

            echo "success";
        }
    } else {
        echo "You're already registered to training";
    }
}
