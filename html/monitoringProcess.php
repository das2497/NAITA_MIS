<?php

require 'connection.php';

session_start();

// echo $_POST['checkbox'] . ' ' . $_POST['nt_id'];

$present_id;

if ($_POST['checkbox'] == 'true') {
    $present_id = 1;
} elseif ($_POST['checkbox'] == 'false') {
    $present_id = 2;
}

$rs1 = Database::search('SELECT *
FROM selected_to_assess
INNER JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
INNER JOIN training_establishment ON training_establishment.tran_est_st_id=student.st_id
INNER JOIN inspector ON selected_to_assess.sltd_asses_inspector=inspector.ins_id
INNER JOIN monitoring_status ON selected_to_assess.sltd_asses_status=monitoring_status.monit_stat_id
WHERE student.naita_id=' . $_POST['nt_id'] . ';');

$d1 = $rs1->fetch_assoc();

$curDate = date('Y-m-d');

if ($d1['sltd_asses_status'] == 1) {

    Database::iud('UPDATE selected_to_assess SET sltd_asses_status=' . '2' . ' , sltd_done=' . '1' . ' WHERE sltd_asses_student=' . $d1['st_id'] . ' AND sltd_asses_inspector=' . $_SESSION['AD']['ad_id'] . ';');

    if ($present_id == 1) {

        Database::iud("UPDATE training_establishment SET tran_monit_stat_id='2' WHERE tran_est_st_id='" . $d1['st_id'] . "';");

        Database::iud("INSERT INTO monitoring_1(mn_date,mn_status,mn_ins_id,participation_parti_id,periods_period_id,student_st_id,super_stat)
    VALUES (' " . $curDate . " ',' 1','" . $_SESSION['AD']['ad_id'] . "','" . $present_id . " ',' " . $d1['tran_perion'] . "','" . $d1['st_id'] . "','0');");
    }

    echo "Success";
} elseif ($d1['sltd_asses_status'] == 2) {

    Database::iud('UPDATE selected_to_assess SET sltd_asses_status=' . '3' . ' , sltd_done=' . '1' . ' WHERE sltd_asses_student=' . $d1['st_id'] . ' AND sltd_asses_inspector=' . $_SESSION['AD']['ad_id'] . ';');

    if ($present_id == 1) {

        Database::iud("UPDATE training_establishment SET tran_monit_stat_id='3' WHERE tran_est_st_id='" . $d1['st_id'] . "';");

        Database::iud("INSERT INTO monitoring_2(mn_date,mn_status,mn_ins_id,participation_parti_id,periods_period_id,student_st_id,super_stat)
    VALUES (' " . $curDate . " ',' 1','" . $_SESSION['AD']['ad_id'] . "','" . $present_id . " ',' " . $d1['tran_perion'] . "','" . $d1['st_id'] . "','0');");
    }

    echo "Success";
} elseif ($d1['sltd_asses_status'] == 3) {

    Database::iud('UPDATE selected_to_assess SET sltd_asses_status=' . '4' . ' , sltd_done=' . '1' . ' WHERE sltd_asses_student=' . $d1['st_id'] . ' AND sltd_asses_inspector=' . $_SESSION['AD']['ad_id'] . ';');

    if ($present_id == 1) {

        Database::iud("UPDATE training_establishment SET tran_monit_stat_id='4' WHERE tran_est_st_id='" . $d1['st_id'] . "';");

        Database::iud("INSERT INTO monitoring_3(mn_date,mn_status,mn_ins_id,participation_parti_id,periods_period_id,student_st_id,super_stat)
    VALUES (' " . $curDate . " ',' 1','" . $_SESSION['AD']['ad_id'] . "','" . $present_id . " ',' " . $d1['tran_perion'] . "','" . $d1['st_id'] . "','0');");
    }

    echo "Success";
}
