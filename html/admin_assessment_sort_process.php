<?php
session_start();
require 'connection.php';

$search = $_POST['admin_assessment_sort_srch'];
$present = $_POST['admin_assessment_sort_preabs'];
$pass = $_POST['admin_assessment_sort_psfl'];
$from = $_POST['admin_assessment_sort_from'];
$to = $_POST['admin_assessment_sort_to'];

$query = "SELECT * FROM assessment
INNER JOIN inspector ON assessment.inspector_ins_id=inspector.ins_id
INNER JOIN admin ON inspector.admin_ad_id=admin.ad_id
INNER JOIN as_status ON assessment.as_status_asstat_id=as_status.asstat_id
INNER JOIN participation ON assessment.participation_parti_id=participation.parti_id
INNER JOIN periods ON assessment.periods_period_id=periods.period_id
INNER JOIN student ON assessment.student_st_id=student.st_id
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
INNER JOIN training_establishment ON training_establishment.tran_est_st_id=student.st_id
INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id";

switch ($search) {
    case '':
        switch ($present) {
            case 'x':
                switch ($pass) {
                    case 'x':
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "nothing";
                                        break;

                                    default:
                                        // echo  "to";
                                        $query .= " WHERE as_date < '" . $to . "'";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "from";
                                        $query .= " WHERE as_date > '" . $from . "'";
                                        break;

                                    default:
                                        // echo  "from to";
                                        $query .= " WHERE as_date BETWEEN '" . $from . "' AND '" . $to . "'";
                                        break;
                                }
                                break;
                        }
                        break;

                    default:
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "pass";
                                        $query .= " WHERE as_status_asstat_id= '" . $pass . "'";
                                        break;

                                    default:
                                        // echo  "pass to";
                                        $query .= " WHERE as_status_asstat_id= '" . $pass . "' AND as_date < '" . $to . "'";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "pass from";
                                        $query .= " WHERE as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "'";
                                        break;

                                    default:
                                        // echo  "pass from to";
                                        $query .= " WHERE as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "'";
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;

            default:
                switch ($pass) {
                    case 'x':
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "present";
                                        $query .= " WHERE participation_parti_id= '" . $present . "'";
                                        break;

                                    default:
                                        // echo  "present to";
                                        $query .= " WHERE participation_parti_id= '" . $present . "' AND as_date < '" . $to . "'";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "present from";
                                        $query .= " WHERE participation_parti_id= '" . $present . "' AND as_date > '" . $from . "'";
                                        break;

                                    default:
                                        // echo  "present from to";
                                        $query .= " WHERE participation_parti_id= '" . $present . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "'";
                                        break;
                                }
                                break;
                        }
                        break;

                    default:
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "present pass";
                                        $query .= " WHERE participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'";
                                        break;

                                    default:
                                        // echo  "present pass to";
                                        $query .= " WHERE participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date < '" . $to . "'";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "present pass from";
                                        $query .= " WHERE participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "'";
                                        break;

                                    default:
                                        // echo  "present pass from to";
                                        $query .= " WHERE participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "'";
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;
        }
        break;

    default:
        switch ($present) {
            case 'x':
                switch ($pass) {
                    case 'x':
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "search";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' 
                                        OR student.nic LIKE '%" . $search . "%' 
                                        OR student.first_name LIKE '%" . $search . "%'
                                        OR university.uni_name LIKE '%" . $search . "%' 
                                        OR student.reg_date LIKE '%" . $search . "%' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'";
                                        break;

                                    default:
                                        // echo  "search to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND as_date < '" . $to . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND as_date < '" . $to . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND as_date < '" . $to . "' 
                                        OR student.first_name LIKE '%" . $search . "%' AND as_date < '" . $to . "'
                                        OR university.uni_name LIKE '%" . $search . "%' AND as_date < '" . $to . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND as_date < '" . $to . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%' AND as_date < '" . $to . "'
                                        OR worksite.wrksit_name LIKE '%" . $search . "%' AND as_date < '" . $to . "'";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "search from";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND as_date > '" . $from . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND as_date > '" . $from . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND as_date > '" . $from . "' 
                                        OR student.first_name LIKE '%" . $search . "%' AND as_date > '" . $from . "'
                                        OR university.uni_name LIKE '%" . $search . "%' AND as_date > '" . $from . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND as_date > '" . $from . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%' AND as_date > '" . $from . "'
                                        OR worksite.wrksit_name LIKE '%" . $search . "%' AND as_date > '" . $from . "'";
                                        break;

                                    default:
                                        // echo  "search from to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.first_name LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "'
                                        OR university.uni_name LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "'
                                        OR worksite.wrksit_name LIKE '%" . $search . "%' AND as_date BETWEEN '" . $from . "' AND '" . $to . "'";
                                        break;
                                }
                                break;
                        }
                        break;

                    default:
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "search pass";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' 
                                        OR student.first_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'
                                        OR university.uni_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'
                                        OR worksite.wrksit_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'";
                                        break;

                                    default:
                                        // echo  "search pass to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "'  
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "'  
                                        OR student.nic LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "'  
                                        OR student.first_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "' 
                                        OR university.uni_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "'  
                                        OR student.reg_date LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "'  
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "' 
                                        OR worksite.wrksit_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date < '" . $to . "' ";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "search pass from";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "'  
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "'  
                                        OR student.nic LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "'  
                                        OR student.first_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "' 
                                        OR university.uni_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "'  
                                        OR student.reg_date LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "'  
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "' 
                                        OR worksite.wrksit_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date > '" . $from . "' 
                                        ";
                                        break;

                                    default:
                                        // echo  "search ass from to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.first_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR university.uni_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR worksite.wrksit_name LIKE '%" . $search . "%' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        ";
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;

            default:
                switch ($pass) {
                    case 'x':
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "search present";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'
                                        ";
                                        break;

                                    default:
                                        // echo  "search present to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'   AND as_date < '" . $to . "'  
                                        ";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "search present from";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'  AND as_date > '" . $from . "'  
                                        ";
                                        break;

                                    default:
                                        // echo  "search present from to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "'  AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        ";
                                        break;
                                }
                                break;
                        }
                        break;

                    default:
                        switch ($from) {
                            case '':
                                switch ($to) {
                                    case '':
                                        // echo  "search present pass";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'
                                        ";
                                        break;

                                    default:
                                        // echo  "search present pass to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'   AND as_date < '" . $to . "' 
                                        ";
                                        break;
                                }
                                break;

                            default:
                                switch ($to) {
                                    case '':
                                        // echo  "search present pass from";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "'  AND as_date > '" . $from . "'  
                                        ";
                                        break;

                                    default:
                                        // echo  "search present pass from to";
                                        $query .= " WHERE student.naita_id LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.full_name_with_init LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.nic LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.first_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR university.uni_name LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR student.reg_date LIKE '%" . $search . "%' AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR training_place.tran_plc_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        OR worksite.wrksit_name LIKE '%" . $search . "%'AND  participation_parti_id= '" . $present . "' AND as_status_asstat_id= '" . $pass . "' AND as_date BETWEEN '" . $from . "' AND '" . $to . "' 
                                        ";
                                        break;
                                }
                                break;
                        }
                        break;
                }
                break;
        }
        break;
}

#===================================================================================================================
#===================================================================================================================
?>
<h4>All Assessment Selected and faced Students</h4>
<table class=" table table-striped  " id="assessment_table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NAITA ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Worksite</th>
            <th scope="col">Training Place</th>
            <th scope="col">University</th>
            <th scope="col">Field</th>
            <th scope="col">Assessment date</th>
            <th scope="col">Assessment Status</th>
            <th scope="col">participation</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php

        require_once 'pagination.php';

        $pg;
        $js_function_name = "assessment_loadPage";

        if (isset($_GET['pg'])) {
            $pg = $_GET['pg'];
        } else {
            $pg = 1;
        }

        $rows = 8;
        $offset = 1 + ($pg - 1) * $rows;
        $urs = Database::search($query . " ORDER BY as_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
        $un = $urs->num_rows;

        // echo $query . " ORDER BY ID ASC LIMIT $rows OFFSET " . ($offset - 1) . ";";

        $urs2 = Database::search($query . ';');
        $un2 = $urs2->num_rows;

        $rs_admin_assessment = Database::search($query . ';');

        $pagination = Pagination::pg($rows, $un2, $js_function_name);

        // echo  $query . ";";

        $ins_id;

        if (isset($_SESSION["SA"])) {
            $ins_id = $_SESSION["SA"]["ad_id"];
        } else if (isset($_SESSION["AD"])) {
            $ins_id = $_SESSION["AD"]["ad_id"];
        }


        for ($i = 0; $i < $un; $i++) {
            $d_admin_assessmen = $urs->fetch_assoc();

            if ($ins_id == $d_admin_assessmen['ad_id']) {

        ?>
                <tr class="table-warning">
                    <td><?= $i + 1; ?></td>
                    <td><?= $d_admin_assessmen['naita_id']; ?></td>
                    <td><?= $d_admin_assessmen['first_name']; ?></td>
                    <td><?= $d_admin_assessmen['wrksit_name']; ?></td>
                    <td><?= $d_admin_assessmen['tran_plc_name']; ?></td>
                    <td><?= $d_admin_assessmen['uni_name']; ?></td>
                    <td><?= $d_admin_assessmen['fld_name']; ?></td>
                    <td><?= $d_admin_assessmen['as_date']; ?></td>
                    <td>
                        <select class="form-select" id="assess_select_pass<?= $d_admin_assessmen['naita_id']; ?>">
                            <?php
                            $rs_admin_assessment_stat = Database::search("SELECT * FROM as_status;");
                            while ($d_admin_assessment_stat = $rs_admin_assessment_stat->fetch_assoc()) {
                                if ($d_admin_assessment_stat['status'] == $d_admin_assessmen['status']) {
                            ?>
                                    <option value="<?= $d_admin_assessment_stat['asstat_id']; ?>" selected><?= $d_admin_assessment_stat['status']; ?></option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?= $d_admin_assessment_stat['asstat_id']; ?>"><?= $d_admin_assessment_stat['status']; ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <select class="form-select" id="assess_select_present<?= $d_admin_assessmen['naita_id']; ?>">
                            <?php
                            $rs_admin_assessment_pati = Database::search("SELECT * FROM participation;");
                            while ($d_admin_assessment_pati = $rs_admin_assessment_pati->fetch_assoc()) {
                                if ($d_admin_assessment_pati['parti_id'] == $d_admin_assessmen['participation_parti_id']) {
                            ?>
                                    <option selected value="<?= $d_admin_assessment_pati['parti_id'] ?>"><?= $d_admin_assessment_pati['parti_stat'] ?></option>
                                <?php
                                } else {
                                ?>
                                    <option value="<?= $d_admin_assessment_pati['parti_id'] ?>"><?= $d_admin_assessment_pati['parti_stat'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td>
                        <div class="col d-grid">
                            <button class="btn btn-outline-primary fw-bold" onclick="assessment_checked('<?= $d_admin_assessmen['naita_id']; ?>');">Submit</button>
                        </div>
                    </td>
                </tr>

        <?php
            }
        }
        ?>


        <tr>
            <td colspan="3"><?= $pagination; ?></td>
        </tr>

    </tbody>
</table>