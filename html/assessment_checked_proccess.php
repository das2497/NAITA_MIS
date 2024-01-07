<?php
require 'connection.php';

// echo $_POST['nt_id'];
// echo $_POST['pass'];
// echo $_POST['Present'];

$rs = Database::search("SELECT * FROM student WHERE naita_id='" . $_POST['nt_id'] . "';");
$st_id = $rs->fetch_assoc();

// echo $st_id['first_name'];

Database::iud("UPDATE assessment 
SET as_status_asstat_id='" . $_POST['pass'] . "', participation_parti_id='" . $_POST['Present'] . "', as_done='1'
WHERE student_st_id='" . $st_id['st_id'] . "';");

echo "Success";
