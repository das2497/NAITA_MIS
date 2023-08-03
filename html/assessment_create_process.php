<?php
session_start();
require 'connection.php';

// echo $_POST['count'];
// echo $_POST['createassesmnt_date'];

if (!empty($_POST['createassesmnt_date'])) {

  $rs_ins = Database::search("SELECT ins_id FROM inspector WHERE admin_ad_id='" . $_SESSION["SA"]["ad_id"] . "';");

  if ($rs_ins->num_rows > 0) {

    for ($i = 0; $i < $_POST["count"]; $i++) {
      if (isset($_POST["nt_id" . strval($i)])) {
        // echo $_POST["nt_id" . strval($i)];
        $rs_st = Database::search("SELECT st_id FROM student WHERE naita_id='" . $_POST["nt_id" . strval($i)] . "';");
        $st_id = $rs_st->fetch_assoc();
        $rs_as = Database::search("SELECT * FROM assessment WHERE student_st_id='" . $st_id["st_id"] . "';");
        if ($rs_as->num_rows == 0) {
          Database::iud("INSERT INTO assessment (as_date,inspector_ins_id,as_status_asstat_id,participation_parti_id,periods_period_id,student_st_id,as_done)
      VALUES ('" . $_POST['createassesmnt_date'] . "','" . $_SESSION["SA"]["ad_id"] . "','3','3','1','" . $st_id["st_id"] . "','0');");
          //   echo "INSERT INTO assessment (as_date,inspector_ins_id,as_status_asstat_id,participation_parti_id,periods_period_id,student_st_id,as_done)
          // VALUES ('" . $_POST['createassesmnt_date'] . "','" . $_SESSION["SA"]["ad_id"] . "','1','3','1','" . $st_id["st_id"] . "','0');";          
          if ($i == ($_POST["count"] - 1)) {
            echo "success";
          }
        } else {
          echo "This student already selected";
        }
      }
    }
  } else {
    echo "You're not an Inspector";
  }
} else {
  echo "Please select a assessment date";
}

