<?php

session_start();

// $query = "SELECT *
// FROM training_establishment
// INNER JOIN student ON training_establishment.tran_est_st_id=student.st_id
// INNER JOIN gender ON student.gender_gn_id=gender.gn_id
// INNER JOIN field ON student.field_fld_id=field.fld_id
// INNER JOIN degree ON field.fld_deg_id=degree.deg_id
// INNER JOIN university ON degree.deg_uni_id=university.uni_id
// INNER JOIN uni_type ON university.uni_type_uni_typ_id=uni_type.uni_typ_id
// INNER JOIN gov_status ON university.gov_status_govstat_id=gov_status.govstat_id
// INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
// INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id
// INNER JOIN periods ON training_establishment.tran_perion=periods.period_id
// INNER JOIN monitoring_status ON training_establishment.tran_monit_stat_id=monitoring_status.monit_stat_id";

// switch ($_GET["sb"]) {
//     case '':
//         switch ($_GET["sc"]) {
//             case '0':

//                 break;

//             default:
//                 $query .= " WHERE worksite.wrksit_id='" . $_GET["sc"] . "'";
//                 break;
//         }

//         break;

//     default:
//         switch ($_GET["sc"]) {
//             case '0':
//                 $query .= " WHERE student.st_id LIKE '%" . $_GET["sb"] . "%' OR student.first_name LIKE '%" . $_GET["sb"] . "%' OR student.last_name LIKE '%" . $_GET["sb"] . "%' OR university.uni_name LIKE '%" . $_GET["sb"] . "%'";
//                 break;

//             default:
//                 $query .= " WHERE (student.st_id LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "') OR (student.first_name LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "') OR (student.last_name LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "') OR (university.uni_name LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "')";
//                 break;
//         }

//         break;
// }

require 'createSearchQuery.php';

$query = CREATE_SEARCH_QUERY::query($_GET["sb"], $_GET["sc"], $_GET["su"], $_GET["sf"], $_GET["sm"]);

require 'connection.php';
require 'pagination.php';

$pg;
$js_function_name = "pg_admin_Available_Training_Students_to_Monitoring";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}

$rows = 10;
$offset = 1 + ($pg - 1) * $rows;

$urs = Database::search($query . " ORDER BY degree.deg_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
$un = $urs->num_rows;

$urs2 = Database::search($query . ";");
$un2 = $urs2->num_rows;

$pagination = Pagination::pg($rows, $un2, $js_function_name);

// $rsm = Database::search($query .= " ORDER BY student.st_id;");
// $nsm = $rsm->num_rows;

// echo $query;

$rsins = Database::search("SELECT * FROM inspector WHERE admin_ad_id='" . $_SESSION["AD"]["ad_id"] . "';");
$inspector = $rsins->fetch_assoc();

?>

<div class="row  h-75">

    <div class="col-12 col-lg-12 mt-4 shadow table-responsive" id="">

        <h4>Available Training Students to Monitoring</h4>

        <table class=" table  table-striped  ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Worksite</th>
                    <th scope="col">Training Place</th>
                    <th scope="col">Univercity</th>
                    <th scope="col">Field</th>
                    <th scope="col">Assessment Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'monitoringValidation.php';

                for ($i = 0; $i < $un; $i++) {
                    $tbd = $urs->fetch_assoc();

                    $x = MonitValidation::x($tbd['st_id']);

                    // echo $x;

                    if ($x == 0) {

                        if ($tbd["monit_status"] != "Monitoring 3") {

                ?>
                            <tr onclick="InsselctSTtomonit('<?= $tbd['st_id']; ?>','<?= $i; ?>','<?= $inspector['ins_id']; ?>','<?= $tbd['tran_monit_stat_id']; ?>');" id="<?= "row" . $i; ?>" style="background-color: #ffb45f67;">
                                <td><?= $i + 1; ?></td>
                                <td><?= $tbd["first_name"]; ?></td>
                                <td><?= $tbd["gender_type"]; ?></td>
                                <td><?= $tbd["wrksit_name"]; ?></td>
                                <td><?= $tbd["tran_plc_name"]; ?></td>
                                <td><?= $tbd["uni_name"]; ?></td>
                                <td><?= $tbd["fld_name"]; ?></td>
                                <td><?= $tbd["monit_status"]; ?></td>
                            </tr>
                <?php
                        }
                    }
                }

                ?>
                <tr>
                    <td colspan="9999"><?= $pagination; ?></td>
                </tr>
            </tbody>
        </table>

    </div>

    <div class="col-12 col-lg-12 mt-4 table-responsive shadow" id="stb">

        <h4>Selected to Monitoring</h4>

        <?php

        $rstb2 = Database::search("SELECT * FROM selected_to_assess
        INNER JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
        INNER JOIN inspector ON selected_to_assess.sltd_asses_inspector=inspector.ins_id
        INNER JOIN monitoring_status ON selected_to_assess.sltd_asses_status=monitoring_status.monit_stat_id
     WHERE selected_to_assess.sltd_asses_inspector='" . $inspector["ins_id"] . "';");
        $tbn2 = $rstb2->num_rows;

        ?>


        <table class=" table table-striped  ">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for ($i = 0; $i < $tbn2; $i++) {
                    $tbd2 = $rstb2->fetch_assoc();

                    if ($tbd2["sltd_asses_approved"] == "0") {


                ?>
                        <tr id="<?php echo $i; ?>" style="background-color:  #0bcbe085;">

                            <td><?php echo $tbd2["st_id"]; ?></td>
                            <td><?php echo $tbd2["first_name"]; ?></td>
                            <td><?php echo $tbd2["sltd_asses_date"]; ?></td>
                        </tr>

                <?php

                    }
                }

                ?>

            </tbody>
        </table>

    </div>

    <div class="col-12 col-lg-12 mt-4 shadow table-responsive" id="">

        <h4>Approved to Monitoring</h4>

        <?php
        $rstb3 = Database::search("SELECT * FROM selected_to_assess
        INNER JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
        INNER JOIN inspector ON selected_to_assess.sltd_asses_inspector=inspector.ins_id
        INNER JOIN monitoring_status ON selected_to_assess.sltd_asses_status=monitoring_status.monit_stat_id
     WHERE selected_to_assess.sltd_asses_inspector='" . $inspector["ins_id"] . "';");

        //         echo "SELECT * FROM selected_to_assess
        //      INNER JOIN student ON selected_to_assess.sltd_asses_student=student.st_id
        //      INNER JOIN inspector ON selected_to_assess.sltd_asses_inspector=inspector.ins_id
        //      INNER JOIN monitoring_status ON selected_to_assess.sltd_asses_status=monitoring_status.monit_stat_id
        //   WHERE selected_to_assess.sltd_asses_inspector='" . $inspector["ins_id"] . "';";

        $tbn3 = $rstb3->num_rows;
        ?>

        <table class=" table table-responsive table-striped  ">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Monitored before</th>
                    <th scope="col">Update</th>
                    <th scope="col">Participation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for ($i = 0; $i < $tbn3; $i++) {
                    $tbd3 = $rstb3->fetch_assoc();

                    if ($tbd3["sltd_asses_approved"] == "1" && $tbd3["sltd_done"] == "0") {

                ?>

                        <tr id="<?= "row2" . $i; ?>" style="background-color:  #6aff00b3;">
                            <td><?= $tbd3["st_id"]; ?></td>
                            <td><?= $tbd3["first_name"]; ?></td>
                            <td><?= $tbd3["sltd_asses_date"]; ?></td>
                            <td><?= $tbd3["monit_status"]; ?></td>
                            <td>
                                <input type="button" class="btn btn-primary" onclick="monitoredByInspector('<?= $tbd3['naita_id']; ?>');" id="Monitored_<?= $tbd3["st_id"]; ?>" autocomplete="off" value="Monitored">
                            </td>
                            <td>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" id="Present_'<?= $tbd3["st_id"]; ?>'" autocomplete="off">
                                    <label class="form-check-label" for="Present_'<?= $tbd3["st_id"]; ?>'">Present</label><br>
                                </div>
                            </td>
                        </tr>

                <?php

                    }
                }
                //  }

                ?>

            </tbody>
        </table>

    </div>
</div>