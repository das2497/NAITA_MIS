<?php

session_start();

if (isset($_SESSION["SA"]) || isset($_SESSION["AD"])) {

    header("Location: admin.php");

} else {

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
        <title>NAITA | INDUSTRIAL TRANIING DIVISION</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png" />
        <!-- Custom CSS -->
        <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="../dist/css/style.min.css" rel="stylesheet" />
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

                <!-- <div class="col-12 bg-primary" style="height: 200px;">

            </div> -->

                <div class="col-12">
                    <div class="row">

                        <!-- logo -->

                        <div class="col-12 col-lg-6 lgd d-block d-lg-block mt-6 mt-lg-0" id="lgd">
                            <div class="row">
                                <div class="col-12">
                                    <img src="../assets/images/login.svg" width="80%" class="mx-auto d-block d-lg-block  ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <h1 class="text-center">NAITA</h1>
                                    <h4 class="text-center fw-bold text-uppercase">Special Industrial Training Division</h4>
                                </div>
                            </div>
                        </div>

                        <!-- logo -->

                        <hr class="d-block d-lg-none mt-4 rounded bg-secondary " style="height: 4px;">

                        <div class="col-lg-6 justify-content-center d-flex col-12 ">
                            <div class="row align-content-center g-4 rounded-3 mt-4 shadow w-100 border-dark" style="padding: 20px; ">

                                <!-- Login -->

                                <?php

                                $uname = "";
                                $password = "";

                                if (isset($_COOKIE["mun"])) {

                                    $uname = $_COOKIE["mun"];
                                }

                                if (isset($_COOKIE["mpswd"])) {

                                    $password = $_COOKIE["mpswd"];
                                }

                                ?>

                                <div class="col-12 " style="display: block;" id="login">
                                    <div class="row">
                                        <h1 class="text-center text-uppercase fw-bold">Login</h1>
                                        <small id="loginSM" style="display: none; " class="small text-success fw-bold text-center"></small>
                                        <div class="col-12 g-2">
                                            <label class="form-label text-uppercase"><span class="text-danger">* </span>User Name OR Email</label>
                                            <small id="unameSM" style="display: none; " class="small text-danger fw-bold"></small>
                                            <input type="text" class="form-control" id="uname" value="<?php echo $uname; ?>">
                                        </div>
                                        <div class="col-12 g-2">
                                            <label class="form-label text-uppercase"><span class="text-danger teu">* </span>Password</label>
                                            <small id="passSM" style="display: none;" class="small text-danger fw-bold"></small>
                                            <input type="text" class="form-control" id="pass" value="<?php echo $password; ?>">
                                        </div>
                                        <div class="col-12 my-4 ps-4">
                                            <div class="row">
                                                <div class="col-6 col-lg-6 form-check">
                                                    <input type="checkbox" id="Mrm" class="form-check-input">
                                                    <label for="Mrm" class="form-label text-uppercase">Remember Me</label>
                                                </div>
                                                <div class="col-6 col-lg-6  ">
                                                    <a href="#" class="link-primary text-decoration-none fw-bold float-end text-uppercase" data-bs-toggle="modal" data-bs-target="#forgotPasswordModel">Forgot Password</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-grid my-4">
                                            <div class="row">
                                                <div class="col-12 col-lg-12 d-grid g-2">
                                                    <button class="btn btn-outline-primary shadow fs-4 fw-bold text-uppercase" onclick="login();">Log In</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Login -->

                            </div>
                        </div>
                    </div>

                </div>


                <!-- model -->

                <div class="modal" tabindex="-1" id="forgotPasswordModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Password Reset</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <label class="form-label">New Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="np">
                                            <button class="btn btn-outline-secondary" type="button" onclick="showPassword1();" id="npb">Show</button>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label">Retype Password</label>
                                        <div class="input-group mb-3">
                                            <input type="password" class="form-control" id="rnp">
                                            <button class="btn btn-outline-secondary" type="button" onclick="showPassword2();" id="rnpb">Show</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Verification Code</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="vc">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="resetPassword();">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- model -->

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

  <?php
}
