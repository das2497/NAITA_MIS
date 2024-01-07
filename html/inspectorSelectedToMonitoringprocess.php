<?php

session_start();

require 'connection.php';

//  echo $_POST["st_count"];
//  echo $_POST["ins_id"];
//  echo $_POST["date"];



for ($i = 1; $i < $_POST["st_count"]; $i++) {

   if (isset($_POST["nt_id" . strval($i)])) {
      // echo $_POST["nt_id" . strval($i)];

      Database::iud("UPDATE selected_to_assess 
      JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
      SET selected_to_assess.sltd_asses_approved='1' WHERE student.naita_id='" . $_POST["nt_id" . strval($i)] . "';");

      echo "success";
   } else {
      echo "Not Selected Students";
   }
}
