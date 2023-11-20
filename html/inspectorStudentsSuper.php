<?php
session_start();

require 'connection.php';
require 'pagination.php';

$pg;
if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}

?>

<div class="row mt-2">

    <div class="col-12 col-lg-12 ">
        <h4>Selected Students To Monitoring</h4>

        <?php

        $rstb2 = Database::search("SELECT * FROM selected_to_assess 
        INNER JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
        WHERE selected_to_assess.sltd_asses_inspector='" . $_POST["inid"] . "' AND selected_to_assess.sltd_asses_approved='0';");

        $tbn2 = $rstb2->num_rows;

        $dt = $rstb2->fetch_assoc();

        ?>

        <div class="row">
            <div class="col-12 col-lg-2 offset-0 offset-lg-8 d-grid ">

                <?php

                if ($tbn2 > 0) {
                ?>

                    <button class="btb btn-primary" onclick="AdeselctST('<?php echo $_POST['inid']; ?>','<?php echo $dt['sltd_asses_date']; ?>');">Aprove</button>

                <?php
                } else {
                ?>

                    <button class="btb btn-primary">Aprove</button>

                <?php
                }



                ?>
            </div>
            <div class="col-12 table-responsive">

                <table class=" table  table-striped  " id="selctdstdntssupr">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><input type="checkbox" id="mainCheckbox1" onclick="AdeselctSTchck();"></th>
                            <th scope="col">NAITA ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">NIC</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Field</th>
                            <th scope="col">Degree</th>
                            <th scope="col">Univercity</th>
                            <th scope="col">Worksite</th>
                            <th scope="col">Training Place</th>
                            <th scope="col">Monitoring Date</th>
                            <th scope="col">Monitoring Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $js_function_name = "pg_admin_inspector_Selected_Students_To_Monitoring";

                        // $rstb3 = Database::search("SELECT *
                        // FROM selected_to_assess
                        // INNER JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
                        // INNER JOIN gender ON student.gender_gn_id=gender.gn_id
                        // INNER JOIN field ON student.field_fld_id=field.fld_id
                        // INNER JOIN degree ON field.fld_deg_id=degree.deg_id
                        // INNER JOIN university ON degree.deg_uni_id=university.uni_id
                        // INNER JOIN uni_type ON university.uni_type_uni_typ_id=uni_type.uni_typ_id
                        // INNER JOIN gov_status ON university.gov_status_govstat_id=gov_status.govstat_id
                        // INNER JOIN training_establishment ON student.st_id=training_establishment.tran_est_st_id
                        // INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
                        // INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id
                        // INNER JOIN monitoring_status ON training_establishment.tran_monit_stat_id=monitoring_status.monit_stat_id
                        // WHERE selected_to_assess.sltd_asses_inspector='" . $_POST["inid"] . "' AND selected_to_assess.sltd_asses_approved='0';");
                        // $tbn3 = $rstb3->num_rows;

                        $query = "SELECT *
                        FROM selected_to_assess
                        INNER JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
                        INNER JOIN gender ON student.gender_gn_id=gender.gn_id
                        INNER JOIN field ON student.field_fld_id=field.fld_id
                        INNER JOIN degree ON field.fld_deg_id=degree.deg_id
                        INNER JOIN university ON degree.deg_uni_id=university.uni_id
                        INNER JOIN uni_type ON university.uni_type_uni_typ_id=uni_type.uni_typ_id
                        INNER JOIN gov_status ON university.gov_status_govstat_id=gov_status.govstat_id
                        INNER JOIN training_establishment ON student.st_id=training_establishment.tran_est_st_id
                        INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
                        INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id
                        INNER JOIN monitoring_status ON training_establishment.tran_monit_stat_id=monitoring_status.monit_stat_id
                        WHERE selected_to_assess.sltd_asses_inspector='" . $_POST["inid"] . "' AND selected_to_assess.sltd_asses_approved='0'";


                        $rows = 10;
                        $offset = 1 + ($pg - 1) * $rows;

                        $urs = Database::search($query . " ORDER BY degree.deg_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
                        $un = $urs->num_rows;

                        $urs2 = Database::search($query . ";");
                        $un2 = $urs2->num_rows;

                        $pagination = Pagination::pg($rows, $un2, $js_function_name);

                        for ($i = 0; $i < $un; $i++) {
                            $tbd2 = $urs->fetch_assoc();

                        ?>
                            <tr onclick="" id="<?= $tbd2["naita_id"] + $i + 1; ?>" class="table-warning">
                                <td><?= $i + 1; ?></td>
                                <td><input type="checkbox" name="select[]" value="<?= $i + 1; ?>"></td>
                                <td><?= $tbd2["naita_id"]; ?></td>
                                <td><?= $tbd2["first_name"]; ?></td>
                                <td><?= $tbd2["last_name"]; ?></td>
                                <td><?= $tbd2["nic"]; ?></td>
                                <td><?= $tbd2["gender_type"]; ?></td>
                                <td><?= $tbd2["fld_name"]; ?></td>
                                <td><?= $tbd2["degree_name"]; ?></td>
                                <td><?= $tbd2["uni_name"]; ?></td>
                                <td><?= $tbd2["wrksit_name"]; ?></td>
                                <td><?= $tbd2["tran_plc_name"]; ?></td>
                                <td><?= $tbd2["sltd_asses_date"]; ?></td>
                                <td><?= $tbd2["monit_status"]; ?></td>
                            </tr>

                        <?php

                        }

                        ?>
                        <tr>
                            <td colspan="9999"><?= $pagination; ?></td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>

    </div>

    <div class="col-12 col-lg-12">
        <h4>Monitored Students</h4>

        <div class="row">
            <div class="col-12 col-lg-2">
                <select id="sampr" class="form-select select2 " onchange="superApproveMonitoring('<?= $_POST['inid']; ?>');">
                    <option value="0" class="text-dark">Select Monitoring Phase</option>
                    <option value="monitoring_1" class="text-dark">Monitoring 1</option>
                    <option value="monitoring_2" class="text-dark">Monitoring 2</option>
                    <option value="monitoring_3" class="text-dark">Monitoring 3</option>
                </select>
            </div>
            <div class="col-12 col-lg-2 offset-0 offset-lg-6 d-grid g-2 my-2">
                <button class="btb btn-primary" onclick="approveMonitoredStudents('<?= $_POST['inid']; ?>');" id="monitoredaprrbtn">Checked</button>
            </div>
            <div class="col-12" id="imtbappr">

                <table class=" table table-responsive table-striped shadow ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Monitored Date</th>
                            <th scope="col">Monitored Phase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-success">
                            <td colspan="4">
                                <h4 class="text-center">Pleace Select Monitored Phase</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

    </div>

</div>