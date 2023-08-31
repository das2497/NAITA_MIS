<?php

require 'connection.php';
require 'encryption.php';

if (isset($_GET['id'])) {
    $id = ENCRIPT::decript($_GET['id']);
    $rs = Database::search("SELECT * FROM student WHERE st_id='" . $id . "';");
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
                <div class="row bg-white my-4 shadow rounded-2 p-4" style="display: block;">
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
                                <input type="text" class="form-control" id="ad_st_FName" placeholder="Type First Name" disabled>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Last Name</label>
                                <input type="text" class="form-control" id="ad_st_LName" placeholder="Type Last Name" disabled>
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Full Name</label>
                                <small id="ad_st_FullName_SM" style="display: none;" class="text-danger">Please Enter Full Name</small>
                                <input type="text" class="form-control" id="ad_st_FullName" placeholder="Type Full Name" disabled>
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Full Name With Initials</label>
                                <input type="text" class="form-control" id="ad_st_FullNameInit" placeholder="Type Full Name With Initials" disabled>
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Enter Address</label>
                                <input type="text" class="form-control" id="ad_st_Address" placeholder="Type Address" disabled>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Gender</label>
                                <?php
                                $rs2 = Database::search("SELECT * FROM gender;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="ad_st_Gender" disabled>
                                    <option value="x">Select Gender</option>
                                    <?php
                                    for ($i = 0; $i < $n; $i++) {
                                        $gender = $rs2->fetch_assoc();
                                    ?>
                                        <option value="<?= $gender["gn_id"]; ?>"><?= $gender["gender_type"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>N.I.C no</label>
                                <input type="text" class="form-control" id="ad_st_NIC" placeholder="Type N.I.C no" disabled>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Mobile no</label>
                                <input type="text" class="form-control" id="ad_st_Mobile" placeholder="Type Mobile no" disabled>
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label">Land line no</label>
                                <input type="text" class="form-control" id="ad_st_Landline" placeholder="Type Land line no" disabled>
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Email Address</label>
                                <input type="text" class="form-control" id="ad_st_Email" placeholder="Type Email Address" disabled>
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>University or Institute</label><br>
                                <?php
                                $rs2 = Database::search("SELECT * FROM university;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="ad_st_Uni" disabled>
                                    <option value="x">Select Your University</option>
                                    <?php
                                    for ($i = 0; $i < $n; $i++) {
                                        $university = $rs2->fetch_assoc();
                                    ?>
                                        <option value="<?= $university["uni_id"]; ?>"><?= $university["uni_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Degree / Diploma / NVQ</label><br>
                                <?php
                                $rs2 = Database::search("SELECT DISTINCT degree_name FROM degree;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="ad_st_Degree" disabled>
                                    <option value="x">Select your Degree / Diploma / NVQ</option>
                                    <?php
                                    for ($i = 0; $i < $n; $i++) {
                                        $degree = $rs2->fetch_assoc();
                                    ?>
                                        <option value="<?= $degree["degree_name"]; ?>"><?= $degree["degree_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Field</label>
                                <?php
                                $rs2 = Database::search("SELECT DISTINCT fld_name FROM field;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="ad_st_Field" disabled>
                                    <option value="x">Select your Field</option>
                                    <?php
                                    for ($i = 0; $i < $n; $i++) {
                                        $fields = $rs2->fetch_assoc();
                                    ?>
                                        <option value="<?= $fields["fld_name"]; ?>"><?= $fields["fld_name"]; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 col-lg-6 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Password</label>
                                <input type="text" class="form-control" id="ad_st_Pass" placeholder="Type Password" disabled>
                            </div>

                            <div class="col-12 g-2 mt-5 border-top border-bottom border-2 p-2">
                                <h1 class="text-center text-uppercase fw-bold fs-4">Training establishment Details</h1>
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
                                    for ($i = 0; $i < $n; $i++) {
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
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Training establishment end date</label>
                                <input type="date" class="form-control" id="st_trn_end_date">
                            </div>
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
                <div class="row bg-white mt-4 p-2 shadow rounded-4" style="display: none;">
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