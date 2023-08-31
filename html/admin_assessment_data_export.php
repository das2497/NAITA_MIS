<?php

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

$output = '';

$c2 = Database::search($query . ";");
$n2 = $c2->num_rows;

// echo $n2;
// echo "</br>";
// echo "</br>";

if (mysqli_num_rows($c2) > 0) {
    $output .= "NAITA Id,First Name,Worksite,Training Place,University,Field,Assessment date,Assessment Status,participation\n";
    $output .= "NAITA Id;First Name;Worksite;Training Place;University;Field;Assessment date;Assessment Status;participation\n";


    while ($d = mysqli_fetch_array($c2)) {
        $output .= $d["naita_id"] . "," . $d["first_name"] . "," . $d["wrksit_name"] . "," . $d["tran_plc_name"] . "," . $d["uni_name"] . "," . $d["fld_name"] . "," . $d["as_date"] . "," . $d["status"] . "," . $d["parti_stat"] . "\n";
    }

    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=download.xls');
    echo $output;
} else {
    echo "<span>No data to export .xls file. </span>";
}
