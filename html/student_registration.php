<?php

require 'connection.php';

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
                <div class="row bg-white my-4 shadow rounded-2 p-4" style="display: block;" id="st_st_form">
                    <div class="col-12 g-2">
                        <h1 class="text-center text-uppercase fw-bold ">Student Register</h1>
                        <small id="st_st_main_SM" style="display: none;" class="text-danger"></small>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>First Name</label>
                                <small id="st_st_FName_SM" style="display: none;" class="text-danger">Please Enter First Name</small>
                                <input type="text" class="form-control" id="st_st_FName" placeholder="Type First Name">
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Last Name</label>
                                <small id="st_st_LName_SM" style="display: none;" class="text-danger">Please Enter Last Name</small>
                                <input type="text" class="form-control" id="st_st_LName" placeholder="Type Last Name">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Full Name</label>
                                <small id="st_st_FullName_SM" style="display: none;" class="text-danger">Please Enter Full Name</small>
                                <input type="text" class="form-control" id="st_st_FullName" placeholder="Type Full Name">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Full Name With Initials</label>
                                <small id="st_st_FullNameInit_SM" style="display: none;" class="text-danger">Please Enter Full Name With Initials</small>
                                <input type="text" class="form-control" id="st_st_FullNameInit" placeholder="Type Full Name With Initials">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Enter Address</label>
                                <small id="st_st_Address_SM" style="display: none;" class="text-danger">Please Enter Address</small>
                                <input type="text" class="form-control" id="st_st_Address" placeholder="Type Address">
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Gender</label>
                                <small id="st_st_Gender_SM" style="display: none;" class="text-danger">Please Select Gender</small>
                                <?php
                                $rs2 = Database::search("SELECT * FROM gender;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="st_st_Gender">
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
                                <small id="st_st_NIC_SM" style="display: none;" class="text-danger">Please Enter N.I.C no</small>
                                <input type="text" class="form-control" id="st_st_NIC" placeholder="Type N.I.C no">
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Mobile no</label>
                                <small id="st_st_Mobile_SM" style="display: none;" class="text-danger">Please Enter Mobile no</small>
                                <input type="text" class="form-control" id="st_st_Mobile" placeholder="Type Mobile no">
                            </div>
                            <div class="col-12 col-lg-6 g-2">
                                <label class="form-label">Land line no</label>
                                <small id="st_st_Landline_SM" style="display: none;" class="text-danger">Please Enter Land line no</small>
                                <input type="text" class="form-control" id="st_st_Landline" placeholder="Type Land line no">
                            </div>
                            <div class="col-12 g-2">
                                <label class="form-label"><span class="text-danger">*</span>Email Address</label>
                                <small id="st_st_Email_SM" style="display: none;" class="text-danger">Please Enter Your Email Address</small>
                                <input type="text" class="form-control" id="st_st_Email" placeholder="Type Email Address">
                            </div>
                            <div class="col-12 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>University or Institute</label><br>
                                <small id="st_st_Uni_SM" style="display: none;" class="text-danger">Please Select Your University or Institute</small>
                                <?php
                                $rs2 = Database::search("SELECT * FROM university;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="st_st_Uni">
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
                                <small id="st_st_Degree_SM" style="display: none;" class="text-danger">Please Enter Your Degree / Diploma / NVQ</small>
                                <?php
                                $rs2 = Database::search("SELECT DISTINCT degree_name FROM degree;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="st_st_Degree">
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
                                <small id="st_st_Field_SM" style="display: none;" class="text-danger">Please Select Your Field</small>
                                <?php
                                $rs2 = Database::search("SELECT DISTINCT fld_name FROM field;");
                                $n = $rs2->num_rows;
                                ?>
                                <select class="form-select bg-transparent " id="st_st_Field">
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
                                <small id="st_st_Pass_SM" style="display: none;" class="text-danger">Please Enter Your Password</small>
                                <input type="text" class="form-control" id="st_st_Pass" placeholder="Type Password">
                            </div>
                            <div class="col-12 col-lg-6 g-2 ">
                                <label class="form-label"><span class="text-danger">*</span>Confirm Password</label>
                                <small id="st_st_Pass_confrm_SM" style="display: none;" class="text-danger">Please Enter Your Password</small>
                                <input type="text" class="form-control" id="st_st_Pass_confrm" placeholder="Type Confirm Password">
                            </div>
                            <div class="col-12 g-4">
                                <div class="row w-100">
                                    <div class="col-12 d-grid">
                                        <button class="btn btn-outline-primary fw-bold fs-4 " onclick="student_reg();">Register now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-white mt-4 p-2 shadow rounded-4" style="display: none;" id="st_st_form_success">
                    <div class="col-12 g-2 d-flex align-items-center justify-content-center m-2 ">
                        <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="100" />
                        <h1 class="text-success text-center float-start fs-1 d-inline mt-2 ms-2">You're Successfully Registered.</h1>
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