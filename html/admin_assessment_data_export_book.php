<?php

require 'connection.php';

// $search = $_POST['admin_assessment_sort_srch'];
// $present = $_POST['admin_assessment_sort_preabs'];
// $pass = $_POST['admin_assessment_sort_psfl'];
// $from = $_POST['admin_assessment_sort_from'];
// $to = $_POST['admin_assessment_sort_to'];

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

// $c2 = Database::search($query . ";");
// $n2 = $c2->num_rows;

// $output = '';

// if (mysqli_num_rows($c2) > 0) {
//     $output .= "NAITA Id,NIC,Email,Name with initials,Full Name,Home address,Assesment date,Contact number,Institute,Field of training,Name of the Training establishment,Training Duration from,Training Duration to,Results,\n";

//     while ($d = mysqli_fetch_array($c2)) {
//         $output .= $d["naita_id"] . "," . $d["first_name"] . "," . $d["wrksit_name"] . "," . $d["tran_plc_name"] . "," . $d["uni_name"] . "," . $d["fld_name"] . "," . $d["as_date"] . "," . $d["status"] . "," . $d["parti_stat"] . "\n";
//     }

//     header('Content-Type: application/xls');
//     header('Content-Disposition: attachment; filename=download.xls');
//     echo $output;
// } else {
//     echo "<span>No data to export .xls file. </span>";
// }

//================================================================================================================================================

// Filter the excel data 
function filterData(&$str)
{
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
}

// Excel file name for download 
$fileName = "assessment_data_for_book_certificate_" . date('Y-m-d') . ".xls";

// Column names 
$fields = array('Registration No', 'National ID', 'Email', 'Name with initials', 'Full Name', 'Home address', 'Contact number', 'Institute', 'Field', 'Training establishment', 'Training Duration from', 'Training Duration to', 'Results', 'Assesment date');

// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n";

// Fetch records from database 
$rs = Database::search($query . ";");
if ($rs->num_rows > 0) {
    // Output each row of the data 
    while ($d = $rs->fetch_assoc()) {
        $lineData = array($d["naita_id"] . "," . $d["first_name"] . "," . $d["wrksit_name"] . "," . $d["tran_plc_name"] . "," . $d["uni_name"] . "," . $d["fld_name"] . "," . $d["as_date"] . "," . $d["status"] . "," . $d["parti_stat"]);
        // array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n";
    }
} else {
    $excelData .= 'No records found...' . "\n";
}

// Headers for download 
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=\"$fileName\"");

// Render excel data 
echo $excelData;

exit;
