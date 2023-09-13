<?php
// require 'connection.php';

// $rstbl = Database::search("SELECT DISTINCT(YEAR(reg_date)) AS YEAR
// FROM student
// INNER JOIN field ON student.field_fld_id=field.fld_id
// INNER JOIN degree ON field.fld_deg_id=degree.deg_id
// INNER JOIN university ON degree.deg_uni_id=university.uni_id
// WHERE university.uni_id='" . $_POST["uniID"] . "';");
// $tbn = $rstbl->num_rows;

?>

<div class="row" id="sdym">


    <div class="col-12 ">

        <table class="table table-responsive table-striped shadow h-75">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody id="pg_admin_student_batch">
              
            </tbody>
        </table>

    </div>
    <div class="col-10 offset-1 col-lg-4 offset-lg-8 d-grid mt-4 " style="margin-bottom: 400px;">
        <button class="btn btn-outline-danger fw-bold" onclick="std_Back_to_uni();">Go Back</button>
    </div>

</div>