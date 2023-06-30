<?php
require 'connection.php';

$rstbl = Database::search("SELECT DISTINCT(field.fld_name)
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_POST["uni"] . "' AND degree.degree_name='" . $_POST["deg"] . "' AND YEAR(student.reg_date)='" . $_POST["yr"] . "';");
$tbn = $rstbl->num_rows;

?>

<div class="col-12 " id="tb">

    <table class=" table table-responsive table-striped shadow ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Field</th>
            </tr>
        </thead>
        <tbody>
            <?php

            for ($i = 0; $i < $tbn; $i++) {
                $tbd = $rstbl->fetch_assoc();


            ?>
                <tr class="table-danger" onclick="stmstudent('<?= $_POST['uni']; ?>','<?= $_POST['deg']; ?>','<?= $_POST['yr']; ?>','<?= $tbd['fld_name']; ?>');">
                    <td><?= $i + 1; ?></td>
                    <td><?= $tbd["fld_name"]; ?></td>
                </tr>

            <?php

            }

            ?>

        </tbody>
    </table>

</div>
<div class="col-10 offset-1 col-lg-4 offset-lg-8 d-grid mt-4 " style="padding-bottom: 50px;">
    <button class="btn btn-outline-danger fw-bold" onclick="std_Back_to_degree();">Go Back</button>
</div>