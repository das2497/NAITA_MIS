<?php

require 'connection.php';

$id = 0;

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $rs = Database::search("SELECT * FROM student
    INNER JOIN gender ON student.gender_gn_id=gender.gn_id
    INNER JOIN field ON student.field_fld_id=field.fld_id
    INNER JOIN degree ON field.fld_deg_id=degree.deg_id
    INNER JOIN university ON degree.deg_uni_id=university.uni_id
    WHERE st_id='" . $_GET['id'] . "';");
    $d = $rs->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAITA | student_registration</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
    <!-- Custom CSS -->
    <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
    <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
    <link href="../dist/css/style.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-cyan">

    <div class="container-fluid ">
        <div class="row " style="background-color: black; ">
            <div class="col-12 d-flex align-items-center justify-content-center m-2">
                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="80" />
                <h4 class="text-white text-center float-start fs-1 d-inline mt-2 ms-2">Special Industrial Training Division - NAITA</h4>
            </div>
        </div>
        <div class="row p-2">
            <div class="col-12 col-lg-10 offset-0 offset-lg-1">
                <div class="row bg-white my-4 shadow rounded-2 p-4" style="display: block;" id="ad_st_Form">
                    <div class="col-12 g-2">
                        <h1 class="text-center text-uppercase fw-bold ">Student Training establishment</h1>
                        <small id="ad_st_main_SM" style="display: none;" class="text-danger"></small>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 g-2 mt-5 border-top border-bottom border-2 p-2">
                                <h1 class="text-center text-uppercase fw-bold fs-4">Your Details</h1>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>First Name</label>
                                <input type="text" class="form-control" id="ad_st_FName" placeholder="Type First Name" disabled value="<?= $d['first_name']; ?>">
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Last Name</label>
                                <input type="text" class="form-control" id="ad_st_LName" placeholder="Type Last Name" disabled value="<?= $d['last_name']; ?>">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Full Name</label>
                                <small id="ad_st_FullName_SM" style="display: none;" class="text-danger">Please Enter Full Name</small>
                                <input type="text" class="form-control" id="ad_st_FullName" placeholder="Type Full Name" disabled value="<?= $d['first_name']; ?>">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Full Name With Initials</label>
                                <input type="text" class="form-control" id="ad_st_FullNameInit" placeholder="Type Full Name With Initials" disabled value="<?= $d['full_name_with_init']; ?>">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Enter Address</label>
                                <input type="text" class="form-control" id="ad_st_Address" placeholder="Type Address" disabled value="<?= $d['first_name']; ?>">
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Gender</label>
                                <input type="text" class="form-control" id="ad_st_Address" placeholder="Type Gender" disabled value="<?= $d['gender_type']; ?>">
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>N.I.C no</label>
                                <input type="text" class="form-control" id="ad_st_NIC" placeholder="Type N.I.C no" value="<?= $d['nic']; ?>" disabled>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Mobile no</label>
                                <input type="text" class="form-control" id="ad_st_Mobile" placeholder="Type Mobile no" value="<?= $d['mobile_no']; ?>" disabled>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label">Land line no</label>
                                <input type="text" class="form-control" id="ad_st_Landline" placeholder="Type Land line no" value="<?= $d['land_line']; ?>" disabled>
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Email Address</label>
                                <input type="text" class="form-control" id="ad_st_Email" placeholder="Type Email Address" value="<?= $d['address']; ?>" disabled>
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>University or Institute</label><br>
                                <input type="text" class="form-control" id="ad_st_Landline" placeholder="Type University or Institute" value="<?= $d['uni_name']; ?>" disabled>
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Degree / Diploma / NVQ</label><br>
                                <input type="text" class="form-control" id="ad_st_Landline" placeholder="Type Degree / Diploma / NVQ" value="<?= $d['degree_name']; ?>" disabled>
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Field</label>
                                <input type="text" class="form-control" id="ad_st_Landline" placeholder="Type Field" value="<?= $d['fld_name']; ?>" disabled>
                            </div>

                            <div class="col-12 g-2 mt-5 border-top border-bottom border-2 p-2">
                                <h1 class="text-center text-uppercase fw-bold fs-4">Training establishment Details</h1>
                            </div>

                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Training Place</label>
                                <?php
                                $st_r_training_place = Database::search("SELECT * FROM training_place;");
                                $st_n_training_place = $st_r_training_place->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="st_trn_training_place">
                                    <option value="x">Select your Training Place</option>
                                    <?php
                                    for ($i = 0; $i < $st_n_training_place; $i++) {
                                        $st_d_training_place = $st_r_training_place->fetch_assoc();
                                    ?>
                                        <option value="<?= $st_d_training_place["tran_plc_id"]; ?>"><?= $st_d_training_place["tran_plc_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Worksite</label>
                                <?php
                                $st_r_worksite = Database::search("SELECT * FROM worksite;");
                                $st_n_worksite = $st_r_worksite->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="st_trn_worksite">
                                    <option value="x">Select your worksite</option>
                                    <?php
                                    for ($i = 0; $i < $st_n_worksite; $i++) {
                                        $st_d_worksite = $st_r_worksite->fetch_assoc();
                                    ?>
                                        <option value="<?= $st_d_worksite["wrksit_id"]; ?>"><?= $st_d_worksite["wrksit_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Training establishment start date</label>
                                <input type="date" class="form-control" id="st_trn_start_date">
                            </div>
                            <!-- <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Training establishment end date</label>
                                <input type="date" class="form-control" id="st_trn_end_date">
                            </div> -->
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Worksite Coordinator Name</label>
                                <input type="text" class="form-control" id="st_trn_coordinator">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Worksite Coordinator Position</label>
                                <input type="text" class="form-control" id="st_trn_coordinator_position">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Worksite Coordinator Contact No</label>
                                <input type="text" class="form-control" id="st_trn_coordinator_contact">
                            </div>
                            <div class="col-12 g-2">
                                <small class="fw-bold text-danger d-block text-center fs-4" id="ad_st_main"></small>
                            </div>
                            <div class="col-12 g-4">
                                <div class="row w-100">
                                    <div class="col-12 d-grid">
                                        <button class="btn btn-outline-primary fw-bold fs-4 shadow" onclick="training_reg('<?= $id; ?>');">Register To Training</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-white mt-4 p-2 shadow rounded-4" style="display: none;" id="ad_st_success">
                    <div class="col-12 g-2 d-flex align-items-center justify-content-center m-2 ">
                        <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="100" />
                        <h1 class="text-success text-center float-start fs-1 d-inline mt-2 ms-2">You're Successfully Registered To The Training.</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="../assets/libs/flot/excanvas.js"></script>
    <script src="../assets/libs/flot/jquery.flot.js"></script>
    <script src="../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <!-- <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script> -->
    <script src="../dist/js/pages/chart/chart-page-init.js"></script>
    <script src="script.js"></script>

</body>

</html>