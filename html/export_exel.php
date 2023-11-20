<?php
include_once 'connection.php';
class Export_Exel
{
    public static function export($query, $titles, $rows, $fileName)
    {
        // Filter the excel data 
        function filterData(&$str)
        {
            $str = preg_replace("/\t/", "\\t", $str);
            $str = preg_replace("/\r?\n/", "\\n", $str);
            if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
        }

        // Excel file name for download 
        $fileName_finel = $fileName . date('Y-m-d') . ".xls";

        // Column names 
        $titles = array('NAITA Id', 'First Name', 'Worksite', 'Training Place', 'University', 'Field', 'Assessment date', 'Assessment Status', 'participation');

        // Display column names as first row 
        $excelData = implode("\t", array_values($titles)) . "\n";

        // Fetch records from database 
        $rs = Database::search($query . ";");
        if ($rs->num_rows > 0) {
            // Output each row of the data 
            while ($row = $rs->fetch_assoc()) {
                $lineData = $rows;
                // array_walk($lineData, 'filterData');
                $excelData .= implode("\t", array_values($lineData)) . "\n";
            }
        } else {
            $excelData .= 'No records found...' . "\n";
        }

        // Headers for download 
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=\"$fileName_finel\"");

        // Render excel data 
        return $excelData;

        exit;
    }
}
