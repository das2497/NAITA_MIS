<?php
session_start();
require 'connection.php';


Database::iud("UPDATE student SET first_name='" . $_POST['st_prof_first_name'] . "', 
last_name='" . $_POST['st_prof_last_name'] . "', 
full_name='" . $_POST['st_prof_full_name'] . "', 
full_name_with_init='" . $_POST['st_prof_full_name_with_init'] . "' 
WHERE st_id='" . $_POST['st_id'] . "';");

// echo "success";

echo "UPDATE student SET first_name='" . $_POST['st_prof_first_name'] . "', last_name='" . $_POST['st_prof_last_name'] . "', 
full_name='" . $_POST['st_prof_full_name'] . "', 
full_name_with_init='" . $_POST['st_prof_full_name_with_init'] . "' 
WHERE st_id='" . $_POST['st_id'] . "';";

