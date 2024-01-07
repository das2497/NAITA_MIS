<?php
require 'connection.php';

$createassesmnt_uni = $_POST['createassesmnt_uni'];
$createassesmnt_batch = $_POST['createassesmnt_batch'];
$createassesmnt_field = $_POST['createassesmnt_field'];
$createassesmnt_degre = $_POST['createassesmnt_degre'];
$createassesmnt_date = $_POST['createassesmnt_date'];

if ($createassesmnt_uni != 'x' && $createassesmnt_batch != 'x'  && $createassesmnt_field != 'x' && $createassesmnt_degre != 'x') {
?>

    <table class=" table  table-striped  " id="tb_create_assesmnt">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Select</th>
                <th scope="col">NAITA ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Worksite</th>
                <th scope="col">Training Place</th>
                <th scope="col">Univercity</th>
                <th scope="col">Field</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rs = Database::search("SELECT * FROM training_establishment
            INNER JOIN student ON training_establishment.tran_est_st_id=student.st_id
            INNER JOIN field ON student.field_fld_id=field.fld_id
            INNER JOIN degree ON field.fld_deg_id=degree.deg_id
            INNER JOIN university ON degree.deg_uni_id=university.uni_id
            INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
            INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id
            WHERE  university.uni_id='" . $createassesmnt_uni . "' 
            AND YEAR(student.reg_date)='" . $createassesmnt_batch . "' 
            AND field.fld_name='" . $createassesmnt_field . "' 
            AND degree.degree_name='" . $createassesmnt_degre . "'
            AND student.naita_id IS NOT NULL;");

            // echo "SELECT * FROM training_establishment
            // INNER JOIN student ON training_establishment.tran_est_st_id=student.st_id
            // INNER JOIN field ON student.field_fld_id=field.fld_id
            // INNER JOIN degree ON field.fld_deg_id=degree.deg_id
            // INNER JOIN university ON degree.deg_uni_id=university.uni_id
            // INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
            // INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id
            // WHERE  university.uni_id='" . $createassesmnt_uni . "' 
            // AND YEAR(student.reg_date)='" . $createassesmnt_batch . "' 
            // AND field.fld_name='" . $createassesmnt_field . "' 
            // AND degree.degree_name='" . $createassesmnt_degre . "'
            // AND student.naita_id IS NOT NULL;";

            if ($rs->num_rows > 0) {

                for ($i = 0; $i < $rs->num_rows; $i++) {
                    $d = $rs->fetch_assoc();

                    $rs_st = Database::search("SELECT * FROM assessment WHERE student_st_id='" . $d['st_id'] . "';");
                    if ($rs_st->num_rows == 0) {
            ?>
                        <tr class="table-warning" id="ca_td">
                            <td><?= $i + 1; ?></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="myCheckbox">
                                </div>
                            </td>
                            <td><?= $d['naita_id']; ?></td>
                            <td><?= $d['first_name']; ?></td>
                            <td><?= $d['wrksit_name']; ?></td>
                            <td><?= $d['tran_plc_name']; ?></td>
                            <td><?= $d['uni_name']; ?></td>
                            <td><?= $d['fld_name']; ?></td>
                        </tr>
                <?php
                    }
                }
            } else {
                ?>
                <tr style="background-color: #ffb45f67;">
                    <td colspan="8" class="text-center ">No students with this detaila</td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>

<?php

} else {
?>
    <table class=" table table-striped  ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NAITA ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Worksite</th>
                <th scope="col">Training Place</th>
                <th scope="col">Univercity</th>
                <th scope="col">Field</th>
                <th scope="col">Assessment date</th>
            </tr>
        </thead>
        <tbody>
            <?php

            ?>
            <tr style="background-color: #ffb45f67;">
                <td colspan="9" class="text-center ">Select Students</td>
            </tr>
            <?php

            ?>

        </tbody>
    </table>
<?php
}
