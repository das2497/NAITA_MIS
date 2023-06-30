<?php

session_start();

require 'connection.php';

if (isset($_SESSION["SA"]) || isset($_SESSION["AD"])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
        <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
        <meta name="robots" content="noindex,nofollow" />
        <title>NAITA | Admin</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
        <!-- Custom CSS -->
        <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
        <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
        <link href="../dist/css/style.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="style.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>

        <div class="container-fluid vh-100 d-flex justify-content-center">
            <div class="row align-content-lg-center align-content-start" style="width: 100%;">

                <div class="col-12 ">

                    <div class="row p-2 p-lg-5">
                        <h1 class="text-center  text-uppercase fw-bold">Student Register</h1>
                        <small id="SrgTSM" style="display: none;" class="small"></small>
                        <div class="col-12 col-lg-6 g-2">
                            <label class="form-label"><span class="text-danger">*</span>Enter Your First Name</label>
                            <small id="SFnameSM" style="display: none;" class="small">Please Enter Your First Name</small>
                            <input type="text" class="form-control" id="SFname">
                        </div>
                        <div class="col-12 col-lg-6 g-2">
                            <label class="form-label"><span class="text-danger">*</span>Enter Your Last Name</label>
                            <small id="SLnameSM" style="display: none;" class="small">Please Enter Your Last Name</small>
                            <input type="text" class="form-control" id="SLname">
                        </div>
                        <div class="col-12 col-lg-6  g-2">
                            <label class="form-label"><span class="text-danger">*</span>Enter Your Full Name With Initials</label>
                            <small id="SFnameWISM" style="display: none;" class="small">Please Enter Your Full Name With Initials</small>
                            <input type="text" class="form-control" id="SFnameWI">
                        </div>
                        <div class="col-12 col-lg-6  g-2">
                            <label class="form-label"><span class="text-danger">*</span>Enter Your Full Name</label>
                            <small id="SFullnameSM" style="display: none;" class="small">Please Enter Your Full Name With Initials</small>
                            <input type="text" class="form-control" id="SFullname">
                        </div>
                        <div class="col-12 g-2">
                            <label class="form-label"><span class="text-danger">*</span>Enter Your Enter your Address</label>
                            <small id="SAddrsSM" style="display: none;" class="small">Please Enter Your Address</small>
                            <input type="text" class="form-control" id="SAddrs">
                        </div>
                        <div class="col-lg-6 col-12 g-2">
                            <label class="form-label"><span class="text-danger">*</span>Gender</label>
                            <small id="SGenderSM" style="display: none;" class="small">Please Select Your Gender</small>
                            <?php
                            $rs2 = Database::search("SELECT * FROM gender;");
                            $n = $rs2->num_rows;
                            ?>
                            <select class="form-select bg-transparent " id="SGender">
                                <option value="x">Select your Gender</option>
                                <?php
                                for ($i = 0; $i < $n; $i++) {
                                    $gender = $rs2->fetch_assoc();
                                ?>
                                    <option value="<?php echo $gender["gn_id"]; ?>"><?php echo $gender["gender_type"]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 g-2">
                            <label class="form-label"><span class="text-danger">*</span>N.I.C no</label>
                            <small id="SNICSM" style="display: none;" class="small">Please Enter Your N.I.C no</small>
                            <input type="text" class="form-control" id="SNicR">
                        </div>
                        <div class="col-lg-6 col-12 g-2">
                            <label class="form-label"><span class="text-danger">*</span>Mobile no</label>
                            <small id="SMobileSM" style="display: none;" class="small">Please Enter Your Mobile no</small>
                            <input type="text" class="form-control" id="SMobile">
                        </div>
                        <div class="col-lg-6 col-12 g-2">
                            <label class="form-label">Land line no</label>
                            <small id="SLandSM" style="display: none;" class="small">Please Enter Your Land line no</small>
                            <input type="text" class="form-control" id="SLand">
                        </div>
                        <div class="col-12 g-2">
                            <label class="form-label"><span class="text-danger">*</span>Enter your Enter your Email Address</label>
                            <small id="SEmailSM" style="display: none;" class="small">Please Enter Your Email Address</small>
                            <input type="text" class="form-control" id="SEmail">
                        </div>
                        <div class="col-lg-6 col-12 g-2 ">
                            <label class="form-label"><span class="text-danger">*</span>Select your Univercity or Institute</label><br>
                            <small id="suSM" style="display: none;" class="small">Please Select Your Univercity or Institute</small>
                            <?php
                            $rs2 = Database::search("SELECT * FROM university;");
                            $n = $rs2->num_rows;
                            ?>
                            <select class="form-select bg-transparent " id="su">
                                <option value="x">Select Your Univercity</option>
                                <?php
                                for ($i = 0; $i < $n; $i++) {
                                    $university = $rs2->fetch_assoc();
                                ?>
                                    <option value="<?php echo $university["uni_id"]; ?>"><?php echo $university["uni_name"]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 g-2 ">
                            <label class="form-label"><span class="text-danger">*</span>Select your Degree / Diploma / NVQ</label><br>
                            <small id="sdSM" style="display: none;" class="small">Please Enter Your Degree / Diploma / NVQ</small>
                            <?php
                            $rs2 = Database::search("SELECT * FROM degree;");
                            $n = $rs2->num_rows;
                            ?>
                            <select class="form-select bg-transparent " id="sd">
                                <option value="x" >Select your Degree / Diploma / NVQ</option>
                                <?php
                                for ($i = 0; $i < $n; $i++) {
                                    $degree = $rs2->fetch_assoc();
                                ?>
                                    <option value="<?php echo $degree["deg_id"]; ?>"><?php echo $degree["degree_name"]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 g-2 ">
                            <label class="form-label"><span class="text-danger">*</span>Select your Relevent Field</label>
                            <small id="srSM" style="display: none;" class="small">Please Select Your Relevent Field</small>
                            <?php
                            $rs2 = Database::search("SELECT * FROM field;");
                            $n = $rs2->num_rows;
                            ?>
                            <select class="form-select bg-transparent " id="sr">
                                <option value="x" >Select your Relevent Field</option>
                                <?php
                                for ($i = 0; $i < $n; $i++) {
                                    $fields = $rs2->fetch_assoc();
                                ?>
                                    <option value="<?php echo $fields["fld_id"]; ?>" ><?php echo $fields["fld_name"]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 g-2 ">
                            <label class="form-label"><span class="text-danger">*</span>Password</label>
                            <small id="SPswdSM" style="display: none;" class="small">Please Enter Your Password</small>
                            <input type="text" class="form-control" id="SPswd">
                        </div>
                        <div class="col-12 d-grid my-4 ">
                            <div class="row">
                                <div class="col-10 offset-1 col-lg-6 offset-lg-3 d-grid g-2 mt-lg-0">
                                    <button class="btn btn-outline-primary fw-bold fs-4" onclick="Sreg();">Register now</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
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
        <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="../dist/js/pages/chart/chart-page-init.js"></script>
        <script src="script.js"></script>
        <!-- newly -->
    </body>

    </html>


<?php

} else {
?>
    <script>
        window.location = "MainAccountLogin.php";
    </script>
<?php

}
