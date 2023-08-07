<?php
session_start();

require 'connection.php';

if (isset($_SESSION["ST"])) {


?>

    <!DOCTYPE html>
    <html dir="ltr" lang="en">

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
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- ============================================================== -->
                        <!-- Logo -->
                        <!-- ============================================================== -->
                        <a class="navbar-brand" href="index.php">
                            <!-- Logo icon -->
                            <b class="logo-icon text-center ps-2 pt-4 d-flex align-items-center justify-content-center">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" width="40" />

                                <?php
                                if (isset($_SESSION["SA"])) {
                                ?>
                                    <h4 class="text-center text-white d-inline ms-2 fs-3 mt-2">SUPER ADMIN</h4>
                                <?php
                                } elseif (isset($_SESSION["AD"])) {
                                ?>
                                    <h4 class="text-center text-white d-inline ms-4 fs-3 mt-2"> ADMIN</h4>
                                <?php
                                } elseif (isset($_SESSION["ST"])) {
                                ?>
                                    <h4 class="text-center text-white d-inline ms-4 fs-3 mt-2"> STUDENT</h4>
                                <?php
                                }
                                ?>
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <!-- <span class="logo-text ms-2"> -->
                            <!-- dark Logo text -->
                            <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                            <!-- </span> -->

                            <!-- Logo icon -->
                            <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="../assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                            <!-- </b> -->
                            <!--End Logo icon -->
                        </a>

                        <!-- ============================================================== -->
                        <!-- End Logo -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Toggle which is visible on mobile only -->
                        <!-- ============================================================== -->
                        <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">

                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-start me-auto">
                            <li class="nav-item d-none d-lg-block">
                                <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                            </li>
                        </ul>
                        <ul class="navbar-nav float-start me-auto">
                            <li class="nav-item">
                                <h4 class="text-white text-center float-start  d-inline">Special Industrial Training Division - NAITA</h4>
                            </li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- Right side toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav float-end">
                            <!-- ============================================================== -->
                            <!-- Messages -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-bell font-24">
                                        <span class="position-absolute top-50 start-90 translate-middle badge rounded-circle bg-danger" style="font-size: 10px;">
                                            99+
                                            <span class="visually-hidden">unread messages</span>
                                        </span>
                                    </i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown" aria-labelledby="2">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="
                                btn btn-success btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-calendar  fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Event today</h5>
                                                            <span class="mail-desc">Just a reminder that event</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="
                                btn btn-info btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-settings fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Settings</h5>
                                                            <span class="mail-desc">You can customize this template</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="
                                btn btn-primary btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-account fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Pavan kumar</h5>
                                                            <span class="mail-desc">Just see the my admin!</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="
                                btn btn-danger btn-circle
                                d-flex
                                align-items-center
                                justify-content-center
                              "><i class="mdi mdi-link fs-4"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">Luanch Admin</h5>
                                                            <span class="mail-desc">Just see the my new admin!</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <!-- ============================================================== -->
                            <!-- End Messages -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                            <li class="nav-item dropdown">
                                <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-account me-1 ms-1"></i> My Profile</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="mdi mdi-settings me-1 ms-1"></i> Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" onclick="logout();"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                </ul>
                            </li>
                            <!-- ============================================================== -->
                            <!-- User profile and search -->
                            <!-- ============================================================== -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="pt-4">
                            <li class="sidebar-item" onclick="st_dashboard();">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
                            </li>
                            <li class="sidebar-item" onclick="st_my_details();">
                                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-monitor" aria-hidden="true"></i><span class="hide-menu"> My Details</span></a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">              
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div> -->
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Sales Cards  -->
                    <!-- ============================================================== -->
                    <div class="row">

                        <!-- ============================================================== -->
                        <!-- DASHBOARD -->
                        <!-- ============================================================== -->
                        <div class="col-12 " id="st_dashboard" style="display: block;">
                            <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Dashboard</h1>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 col-md-3 border border-1 border-dark shadow p-2 m-2">
                                        <div class="row g-2 p-1" style="background-color:#d3f6ef;">
                                            <div class="col-12 text-uppercase fw-bold">2023-06-28
                                            </div>
                                            <div class="col-md-12  bg-white fw-bold">
                                                <i class="icon-social-dribbble font-purple-soft"></i> University of Colombo
                                            </div>
                                            <div class="col-md-12  bg-white fw-bold">
                                                <i class="icon-tag font-green-dark"></i> BSc Software Engineering
                                            </div>
                                            <div class="col-md-12  bg-white fw-bold">
                                                <i class="icon-tag font-green-dark"></i> IT
                                            </div>
                                            <div class="col-md-12 bg-white fw-bold">
                                                <i class="icon-clock font-purple-studio"></i> 19:00 PM to 00:00 AM
                                            </div>
                                            <div class="col-md-12 fw-bold" style="background-color: #d4d4d4;">
                                                <i class="icon-user font-green-jungle"></i> 1'st Monitoring
                                            </div>
                                            <div class="col-md-12 fw-bold" style="background-color: #d4d4d4;">
                                                <i class="icon-user font-green-jungle"></i> Miss Dinushi Ranasinghe
                                            </div>
                                            <div class="col-md-12 fw-bold text-white bg-dark " style="padding: 5px;">
                                                <i class="fa fa-map-marker font-green-meadow"></i> Colombo Head Office - Online
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 border border-1 border-dark shadow p-2 m-2">
                                        <div class="row g-2 p-1" style="background-color:#d3f6ef;">
                                            <div class="col-12 text-uppercase fw-bold">2023-06-30
                                            </div>
                                            <div class="col-md-12  bg-white fw-bold">
                                                <i class="icon-social-dribbble font-purple-soft"></i> University of Colombo
                                            </div>
                                            <div class="col-md-12  bg-white fw-bold">
                                                <i class="icon-tag font-green-dark"></i> BSc Software Engineering
                                            </div>
                                            <div class="col-md-12  bg-white fw-bold">
                                                <i class="icon-tag font-green-dark"></i> IT
                                            </div>
                                            <div class="col-md-12 bg-white fw-bold">
                                                <i class="icon-clock font-purple-studio"></i> 19:00 PM to 00:00 AM
                                            </div>
                                            <div class="col-md-12 fw-bold" style="background-color: #d4d4d4;">
                                                <i class="icon-user font-green-jungle"></i> 1'st Monitoring
                                            </div>
                                            <div class="col-md-12 fw-bold" style="background-color: #d4d4d4;">
                                                <i class="icon-user font-green-jungle"></i> Miss Dinushi Ranasinghe
                                            </div>
                                            <div class="col-md-12 fw-bold text-white bg-dark " style="padding: 5px;">
                                                <i class="fa fa-map-marker font-green-meadow"></i> Colombo Head Office - Online
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- DASHBOARD -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- MY DETAILS  -->
                        <!-- ============================================================== -->

                        <di class="col-12 " id="st_my_details" style="display: none;" v>
                            <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">My Details</h1>

                    </div>

                    <!-- ============================================================== -->
                    <!-- MY DETAILS  -->
                    <!-- ============================================================== -->


                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- MODALS -->
        <!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- MODALS -->
        <!-- ============================================================== -->

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
        <!-- <script src="../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script> -->
        <script src="../dist/js/pages/chart/chart-page-init.js"></script>
        <script src="script.js"></script>
        <!-- newly -->

    </html>

<?php
} else {
    header("Location: index.php");
}
