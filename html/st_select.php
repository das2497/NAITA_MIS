<!-- <h1 class="text-danger d-lg-none hland text-center">Pleace turn mobile to landskape.</h1>
<h1 class="text-center mt-4">All Students</h1> -->



<?php
require 'connection.php';

// echo $_POST["yr"] . " " . $_POST["uni"] . " " . $_POST["deg"];

$rstbl = Database::search("SELECT *
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
INNER JOIN gender ON student.gender_gn_id=gender.gn_id
WHERE degree.degree_name='" . $_POST['deg'] . "' AND university.uni_id='" . $_POST['uni'] . "' AND YEAR(student.reg_date)='" . $_POST['yr'] . "' AND field.fld_name='" . $_POST['field'] . "';");
$tbn = $rstbl->num_rows;

?>

<div class="row" onload="searchindist('<?= $_POST['deg']; ?>','<?= $_POST['uni']; ?>','<?= $_POST['yr']; ?>','<?= $_POST['field']; ?>');">

    <div class="col-12 table-responsive" id="tb">

        <table class=" table table-striped shadow ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NAITA ID</th>
                    <th scope="col">Full Name with init</th>
                    <th scope="col">N.I.C.</th>
                    <th scope="col">Mobile No</th>
                    <th scope="col">Landline No</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Field</th>
                    <th scope="col">Degree</th>
                    <th scope="col">University</th>
                    <th scope="col">Registered Date</th>
                    <th scope="col">Profile</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for ($i = 0; $i < $tbn; $i++) {
                    $tbd = $rstbl->fetch_assoc();

                ?>
                    <tr class=" <?php if ($tbd["gov_status_govstat_id"] == "1" || $tbd["gov_status_govstat_id"] == "3") {
                                ?> alert-info <?php
                                            } else {
                                                ?> alert-danger <?php
                                                            } ?>">
                        <td><?= $tbd["st_id"]; ?></td>
                        <td>
                            <?php if ($tbd["naita_id"] == "") {
                            ?>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" id="add_nt_id<?= $tbd['nic']; ?>">
                                    <button class="btn btn-outline-primary fw-bold input-group-btn" onclick="enter_naita_id(<?= $tbd['nic']; ?>);">Enter</button>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username" id="update_nt_id<?= $tbd['nic']; ?>" value="<?= $tbd["naita_id"]; ?>">
                                    <button class="btn btn-outline-danger fw-bold input-group-btn" onclick="update_naita_id(<?= $tbd['nic']; ?>);">Update</button>
                                </div>
                            <?php
                            }  ?>
                        </td>
                        <td><?= $tbd["full_name_with_init"]; ?></td>
                        <td><?= $tbd["nic"]; ?></td>
                        <td><?= $tbd["mobile_no"]; ?></td>
                        <td><?= $tbd["land_line"]; ?></td>
                        <td><?= $tbd["gender_type"]; ?></td>
                        <td><?= $tbd["fld_name"]; ?></td>
                        <td><?= $tbd["degree_name"]; ?></td>
                        <td><?= $tbd["uni_name"]; ?></td>
                        <td><?= $tbd["reg_date"]; ?></td>
                        <td><button onclick="Student_profile_admin(<?= $tbd['st_id']; ?>);" class="btn btn-outline-primary fw-bold">View Profile</button></td>
                    </tr>

                <?php

                }

                ?>

            </tbody>
        </table>

    </div>
    <div class="col-10 offset-1 col-lg-4 offset-lg-8 d-grid mt-4 " style="padding-bottom: 50px;">
        <button class="btn btn-outline-danger fw-bold" onclick="std_Back_to_field();">Go Back</button>
    </div>

</div>