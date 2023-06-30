<?php
// require 'connection.php';

class T
{

    public static function x($st_id)
    {
        $x = 0;

        $rs1 = Database::search("SELECT *
        FROM selected_to_assess
        WHERE sltd_asses_student='" . $st_id . "' AND sltd_done='0';");
        $n1 = $rs1->num_rows;
        if ($n1 > 0) {
            $x = 1;
        } else {
            $x = 0;

            $rs2 = Database::search("SELECT * FROM monitoring_1 
            WHERE student_st_id='" . $st_id . "' AND super_stat='0';");
            $n2 = $rs2->num_rows;
            if ($n2 > 0) {
                $x = 1;
            } else {
                $x = 0;

                $rs3 = Database::search("SELECT * FROM monitoring_2 
                WHERE student_st_id='" . $st_id . "' AND super_stat='0';");
                $n3 = $rs3->num_rows;
                if ($n3 > 0) {
                    $x = 1;
                } else {
                    $x = 0;

                    $rs4 = Database::search("SELECT * FROM monitoring_3 
                    WHERE student_st_id='" . $st_id . "' AND super_stat='0';");
                    $n4 = $rs4->num_rows;
                    if ($n4 > 0) {
                        $x = 1;
                    } else {
                        $x = 0;

                        $rs1 = Database::search("SELECT * FROM assessment
                    WHERE student_st_id='" . $st_id . "' AND as_done='0';");
                        $n1 = $rs1->num_rows;
                        if ($n1 > 0) {
                            $x = 1;
                        } else {
                            $x = 0;
                        }
                        // echo  " assessment " . $x;
                    }
                    // echo  " monitoring_3 " . $x;
                }
                // echo  " monitoring_2 " . $x;
            }
            // echo  " monitoring_1 " . $x;
        }
        // echo  " selected_to_assess " . $x;



        return $x;
    }
}
