<!-- <h1 class="text-danger d-lg-none hland text-center">Pleace turn mobile to landskape.</h1>
<h1 class="text-center mt-4">All Students</h1> -->



<?php
require 'connection.php';

$rstbl = Database::search("SELECT DISTINCT(degree.degree_name) FROM student 
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_POST["uni"] . "' AND YEAR(student.reg_date)='" . $_POST["yr"] . "';");
$tbn = $rstbl->num_rows;

?>

<div class="col-12 " id="tb">

    <table class=" table table-responsive table-striped shadow ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Degree</th>
            </tr>
        </thead>
        <tbody>
            <?php

            for ($i = 0; $i < $tbn; $i++) {
                $tbd = $rstbl->fetch_assoc();

            ?>
                <tr onclick="stmfield('<?= $_POST['uni']; ?>','<?= $tbd['degree_name']; ?>','<?= $_POST['yr']; ?>');" class="x" style="background-color: aquamarine;">
                    <td><?= $i + 1; ?></td>
                    <td><?= $tbd["degree_name"]; ?></td>
                </tr>

            <?php

            }

            ?>

        </tbody>
    </table>

</div>
<div class="col-10 offset-1 col-lg-4 offset-lg-8 d-grid mt-4 " style="padding-bottom: 50px;">
    <button class="btn btn-outline-danger fw-bold" onclick="std_Back_to_batch();">Go Back</button>
</div>