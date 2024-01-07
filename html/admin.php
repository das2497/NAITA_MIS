<?php
session_start();

require_once 'connection.php';

if (isset($_SESSION["SA"]) || isset($_SESSION["AD"])) {


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

  <body onload="admin_load();">
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
                  <h4 class="text-center text-white d-inline ms-2 fs-3 mt-2">Super Admin</h4>
                <?php
                } elseif (isset($_SESSION["AD"])) {
                ?>
                  <h4 class="text-center text-white d-inline ms-4 fs-3 mt-2"> Admin</h4>
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
              <li class="sidebar-item" onclick="dashb();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
              </li>
              <!-- <li class="sidebar-item" onclick="meetin();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-monitor" aria-hidden="true"></i><span class="hide-menu"> Meeting Schedule</span></a>
              </li> -->
              <li class="sidebar-item" onclick="studnts();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Students</span></a>
              </li>
              <li class="sidebar-item" onclick="univrcti();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-open"></i><span class="hide-menu">Universities</span></a>
              </li>
              <!-- <li class="sidebar-item" onclick="assrs();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-library"></i><span class="hide-menu">Assessors</span></a>
              </li> -->
              <li class="sidebar-item" onclick="trnnplc();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-briefcase"></i><span class="hide-menu">Training Places</span></a>
              </li>
              <!-- <li class="sidebar-item" onclick="rpots();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-paper-cut-vertical"></i><span class="hide-menu">Reports</span></a>
              </li> -->
              <li class="sidebar-item" onclick="assmts();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-clipboard-text"></i><span class="hide-menu">Assessments</span></a>
              </li>
              <li class="sidebar-item" onclick="montrin();">
                <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-poll"></i><span class="hide-menu">Monitoring</span></a>
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
            <div class="col-12 " id="dsbrd" style="display: block;">
              <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Dashboard</h1>
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row ">
                      <div class="col-md-6 col-lg-2 col-xlg-3 " data-bs-toggle="tooltip" data-bs-placement="top" title="All Students Count">
                        <div class="card card-hover">
                          <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white">
                              <i class="mdi mdi-account-multiple-plus"></i>
                            </h1>
                            <h6 class="text-white text-uppercase text-truncate">All Students Count</h6>
                            <?php
                            $rs_ad_dash_st = Database::search('SELECT COUNT(st_id) FROM student;');
                            $d_ad_dash_st = $rs_ad_dash_st->fetch_assoc();

                            ?>
                            <h4 class="text-white text-uppercase"><?php
                                                                  if ($rs_ad_dash_st->num_rows > 0) {
                                                                    echo $d_ad_dash_st['COUNT(st_id)'];
                                                                  } else {
                                                                    echo '_ _ _';
                                                                  }


                                                                  ?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-2 col-xlg-3 " data-bs-toggle="tooltip" data-bs-placement="top" title="ASSESSORS">
                        <div class="card card-hover">
                          <div class="box bg-success text-center">
                            <h1 class="font-light text-white">
                              <i class="mdi mdi-library"></i>
                            </h1>
                            <h6 class="text-white text-uppercase text-truncate">Universities</h6>
                            <?php
                            $rs_ad_dash_st = Database::search('SELECT COUNT(uni_id) FROM university;');
                            $d_ad_dash_st = $rs_ad_dash_st->fetch_assoc();

                            ?>
                            <h4 class="text-white text-uppercase"><?php
                                                                  if ($rs_ad_dash_st->num_rows > 0) {
                                                                    echo $d_ad_dash_st['COUNT(uni_id)'];
                                                                  } else {
                                                                    echo '_ _ _';
                                                                  }


                                                                  ?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-2 col-xlg-3 " data-bs-toggle="tooltip" data-bs-placement="top" title="Inspectors">
                        <div class="card card-hover">
                          <div class="box bg-purple text-center">
                            <h1 class="font-light text-white">
                              <i class="mdi mdi-library"></i>
                            </h1>
                            <h6 class="text-white text-uppercase text-truncate">Degrees</h6>
                            <?php
                            $rs_ad_dash_st = Database::search('SELECT COUNT(deg_id) FROM degree;');
                            $d_ad_dash_st = $rs_ad_dash_st->fetch_assoc();

                            ?>
                            <h4 class="text-white text-uppercase"><?php
                                                                  if ($rs_ad_dash_st->num_rows > 0) {
                                                                    echo $d_ad_dash_st['COUNT(deg_id)'];
                                                                  } else {
                                                                    echo '_ _ _';
                                                                  }


                                                                  ?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-2 col-xlg-3 " data-bs-toggle="tooltip" data-bs-placement="top" title="Students to Monitoring">
                        <div class="card card-hover">
                          <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                              <i class="mdi mdi-poll"></i>
                            </h1>
                            <h6 class="text-white text-uppercase text-truncate">Fields</h6>
                            <?php
                            $rs_ad_dash_st = Database::search('SELECT COUNT(fld_id) FROM field;');
                            $d_ad_dash_st = $rs_ad_dash_st->fetch_assoc();

                            ?>
                            <h4 class="text-white text-uppercase"><?php
                                                                  if ($rs_ad_dash_st->num_rows > 0) {
                                                                    echo $d_ad_dash_st['COUNT(fld_id)'];
                                                                  } else {
                                                                    echo '_ _ _';
                                                                  }


                                                                  ?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-2 col-xlg-3 " data-bs-toggle="tooltip" data-bs-placement="top" title="Students to Assessments">
                        <div class="card card-hover">
                          <div class="box bg-warning text-center">
                            <h1 class="font-light text-white">
                              <i class="mdi mdi-clipboard-text"></i>
                            </h1>
                            <h6 class="text-white text-uppercase text-truncate">Training Registered Students</h6>
                            <?php
                            $rs_ad_dash_st = Database::search('SELECT COUNT(tran_est_id) FROM training_establishment;');
                            $d_ad_dash_st = $rs_ad_dash_st->fetch_assoc();

                            ?>
                            <h4 class="text-white text-uppercase"><?php
                                                                  if ($rs_ad_dash_st->num_rows > 0) {
                                                                    echo $d_ad_dash_st['COUNT(tran_est_id)'];
                                                                  } else {
                                                                    echo '_ _ _';
                                                                  }


                                                                  ?></h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-2 col-xlg-3 " data-bs-toggle="tooltip" data-bs-placement="top" title="All Completed Students">
                        <div class="card card-hover">
                          <div class="box bg-orange text-center">
                            <h1 class="font-light text-white">
                              <i class="mdi mdi-school"></i>
                            </h1>
                            <h6 class="text-white text-uppercase text-truncate">Assessment Selected Students</h6>
                            <?php
                            $rs_ad_dash_st = Database::search('SELECT COUNT(as_id) FROM assessment;');
                            $d_ad_dash_st = $rs_ad_dash_st->fetch_assoc();

                            ?>
                            <h4 class="text-white text-uppercase"><?php
                                                                  if ($rs_ad_dash_st->num_rows > 0) {
                                                                    echo $d_ad_dash_st['COUNT(as_id)'];
                                                                  } else {
                                                                    echo '_ _ _';
                                                                  }


                                                                  ?></h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-12 col-md-6 pt-4">
                    <div class="row">
                      <div class="col-12 shadow p-2">
                        <h4>Students without Registration number : <?php
                                                                    $rs_without_reg_no = Database::search("SELECT * FROM student WHERE student.naita_id IS NULL;");
                                                                    $rs_with_reg_no = Database::search("SELECT * FROM student;");
                                                                    $ns_without_reg_no = $rs_without_reg_no->num_rows;
                                                                    $ns_with_reg_no = $rs_with_reg_no->num_rows;
                                                                    echo $ns_without_reg_no;

                                                                    ?></h4>
                        <div>
                          <div class="d-flex no-block align-items-center mt-4">
                            <span><?php
                                  $ns_without_reg_no_percent = ($ns_without_reg_no / $ns_with_reg_no) * 100;
                                  $ns_without_reg_no_percent_final = 100 - $ns_without_reg_no_percent;
                                  echo round($ns_without_reg_no_percent_final, 2);
                                  ?>% </span>
                            <div class="ms-auto">
                              <span><?php echo $ns_with_reg_no; ?></span>
                            </div>
                          </div>
                          <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo $ns_without_reg_no_percent_final; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="col-12">
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
                </div>
              </div> -->
            </div>
            <!-- ============================================================== -->
            <!-- DASHBOARD -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- MEETING schedule -->
            <!-- ============================================================== -->
            <div class="col-12 " id="mtngsdl" style="display: none;">
              <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Meeting schedule</h1>
              <div class="row g-2 mx-2">
                <div class="col-12">
                  <label class="form-label"><span class="text-danger">*</span>Coordinator</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <input type="text" id="Meeshedl" class="form-control" placeholder="Pleace Enter Coordinator's Name">
                </div>
                <div class="col-12  d-grid">
                  <label class="form-label"><span class="text-danger">*</span>Date</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <input type="date" name="" class="form-control" id="MDate">
                </div>
                <div class="col-12 d-grid">
                  <label class="form-label"><span class="text-danger">*</span>Time</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <input type="time" name="" class="form-control" id="MTime">
                </div>
                <div class="col-12">
                  <label class="form-label"><span class="text-danger">*</span>Name of meeting</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <?php
                  $rs2 = Database::search("SELECT * FROM meeting_name;");
                  $n2 = $rs2->num_rows;
                  ?>
                  <select class="form-select" id="MName">
                    <option value="00">Select Meeting Name</option>
                    <?php
                    for ($i = 0; $i < $n2; $i++) {
                      $meetname = $rs2->fetch_assoc();
                    ?>
                      <option value="<?= $meetname["mn_id"] ?>"><?= $meetname["mn_name"]; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label"><span class="text-danger">*</span>Type of meeting</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <?php
                  $rs1 = Database::search("SELECT * FROM meeting_type;");
                  $n1 = $rs1->num_rows;
                  ?>
                  <select class="form-select" id="MType">
                    <option value="00">Select Meeting Type</option>
                    <?php
                    for ($i = 0; $i < $n1; $i++) {
                      $asses = $rs1->fetch_assoc();
                    ?>
                      <option value="<?= $asses["mt_id"] ?>"><?= $asses["mt_type"]; ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                <div class="col-12 d-grid">
                  <label class="form-label"><span class="text-danger">*</span>Zoom Meeting Link</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <input type="text" name="" class="form-control" id="MLink" placeholder="Paste the zoom link here...">
                </div>
                <div class="col-12 d-grid">
                  <label class="form-label"><span class="text-danger">*</span>Location</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <input type="text" name="" class="form-control" id="MLocation" placeholder="Enter Location.....">
                </div>
                <div class="col-12 d-grid">
                  <label class="form-label"><span class="text-danger">*</span>Special Notes</label>
                  <small id="MunmSM" style="display: none;" class="small"></small>
                  <textarea class="form-control" id="" cols="30" rows="4" placeholder="Special Notes for Students"></textarea>
                </div>
                <div class="col-12 mt-4 mb-4 d-grid">
                  <button class="btn btn-outline-primary  shadow fw-bold fs-4" onclick="meetingShedule();">Schedule Meeting</button>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- MEETING schedule -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- STUDENTS -->
            <!-- ============================================================== -->
            <div class="col-12 " id="stdnt" style="display: none;">
              <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Students</h1>
              <div class="row">
                <!-- <div class="col-12 offset-0 col-lg-2 offset-lg-0 d-grid">
                  <input class="d-none" type="file" accept="pdf/*" id="addcontract" />
                  <label for="addcontract" onclick="selctcontract();" class="btn btn-outline-primary  fw-bold shadow m-2">Select Contract Form
                    <small id="viewM" class="text-warning"></small>
                  </label>
                </div> -->
                <!-- <div class="col-12 offset-0 col-lg-2 offset-lg-0 d-grid">
                  <button class="btn btn-outline-primary  fw-bold shadow m-2" onclick="upload_contract();">Upload Contract Form</button>
                </div> -->
                <div class="col-12 offset-0 col-lg-3 offset-lg-3 d-grid">
                  <button class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#all_students">All Students</button>
                </div>
                <div class="col-12 offset-0 col-lg-3 offset-lg-0 d-grid">
                  <button class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#all_training_established_students">All Training Established Students</button>
                </div>
                <div class="col-12 offset-0 col-lg-3 offset-lg-0 d-grid">
                  <button class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#add_student">Add New Student</button>
                </div>
                <div class="col-12">

                  <div id="stprofBody" class=" " style="display: none;"></div>
                  <div id="selctBody" class=" " style="display: none;"></div>
                  <div id="fieldBody" class=" " style="display: none;"></div>
                  <div id="degBody" class=" " style="display: none;"></div>
                  <div id="stmBody" class=" " style="display: none;"></div>
                  <div id="unimBody" class="table-responsive">
                    <table class="table table-striped shadow">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">University Type</th>
                          <th scope="col">University Name</th>
                        </tr>
                      </thead>
                      <tbody id="pg_admin_student_university">

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- STUDENTS -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- UNIVERSITIES -->
            <!-- ============================================================== -->
            <div class="col-12 " id="unvrcts" style="display: none;">
              <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Universities</h1>
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-10 offset-1 col-lg-2 offset-lg-4 d-grid">
                      <button type="button" class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#add_field">Add New Field</button>
                    </div>
                    <div class="col-10 offset-1 col-lg-2 offset-lg-0 d-grid">
                      <button type="button" class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#add_degree">Add New Degree</button>
                    </div>
                    <div class="col-10 offset-1 col-lg-4 offset-lg-0 d-grid">
                      <button class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#add_university">Add New University / Institute</button>
                    </div>
                    <div id="admin_university_prof"></div>
                    <div class="col-12  table-responsive" id="admin_university_list">
                      <table class="table table-striped shadow">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">University Type</th>
                            <th scope="col">University Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact No 1</th>
                            <th scope="col">Contact No 2</th>
                            <th>Government or not</th>
                          </tr>
                        </thead>
                        <tbody id="pg_admin_university_university">

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ============================================================== -->
            <!-- UNIVERSITIES -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- ASSESSORS -->
            <!-- ============================================================== -->
            <div class="col-12 " id="assors" style="display: none;">
              <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Assessors</h1>
            </div>
            <!-- ============================================================== -->
            <!-- ASSESSORS -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- TRAINING PLACE -->
            <!-- ============================================================== -->
            <div class="col-12 " id="trnplc" style="display: none;">
              <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Training Places</h1>
              <div class="row">
                <div class="col-10 offset-1 col-lg-4 offset-lg-0 d-grid">
                  <button class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#add_worksite" type="button">Add New Worksite</button>
                </div>
                <div class="col-10 offset-1 col-lg-4 offset-lg-0 d-grid">
                  <button class="btn btn-outline-primary  fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#add_training_place" type="button">Add New Training Place</button>
                </div>
              </div>
              <div class="row">
                <div class="col-12 mt-4">
                  <h4>Training Places</h4>
                  <d class="table-responsive">
                    <table class="table table-striped shadow">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Email</th>
                          <th>Contact 1</th>
                          <th>Contact 2</th>
                          <th>District</th>
                          <th>Coordinator Name</th>
                          <th>Coordinator Position</th>
                        </tr>
                      </thead>
                      <tbody id="all_training_places">

                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- TRAINING PLACE -->
          <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- REPORTS -->
          <!-- ============================================================== -->
          <div class="col-12 " id="ripot" style="display: none;">
            <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Reports</h1>
            <div class="row">
              <div class="col-12 p-2 mt-2 ">
                <div class="row shadow">
                  <form action="" method="POST" class="col-12">
                    <!-- report_by_date_export.php -->
                    <div class="row">
                      <div class="col-12">
                        <h4 class="text-center my-2 text-decoration-underline">Students By Date</h4>
                      </div>
                      <div class="col-12 col-lg-2"><label>From</label>
                        <input type="date" name="repodtfrom" id="repodtfrom" onchange="searchbydaterepo();" class="form-control">
                      </div>
                      <div class="col-12 col-lg-2"><label>To</label>
                        <input type="date" name="repodtto" id="repodtto" onchange="searchbydaterepo();" class="form-control">
                      </div>
                      <div class="col-12 col-lg-4 offset-lg-4 d-grid">
                        <button type="submit" class="btn btn-outline-primary fw-bold shadow m-2">Download Report</button>
                      </div>
                    </div>
                  </form>
                  <div class="col-12 mt-2" id="repbydatetbl">
                    <table class="table table-responsive stdn">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">NAITA Id</th>
                          <th scope="col">Student Id</th>
                          <th scope="col">Student Full Name</th>
                          <th scope="col">N.I.C.</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="x" style="background-color: aquamarine;">
                          <td class="text-center fw-bold" colspan="5">Pleace Select Time Duration</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row shadow mt-4">
                  <form action="" method="POST" class="col-12">
                    <!-- report_by_date_export_monit.php -->
                    <div class="row">
                      <div class="col-12">
                        <h4 class="text-center my-2 text-decoration-underline">Monitoring Reports</h4>
                      </div>
                      <div class="col-12 col-lg-2"><label>From</label>
                        <input type="date" name="from" id="repomonitfrom" onchange="searchbydaterepomonit();" class="form-control">
                      </div>
                      <div class="col-12 col-lg-2"><label>To</label>
                        <input type="date" name="to" id="repomonitto" onchange="searchbydaterepomonit();" class="form-control">
                      </div>
                      <div class="col-12 col-lg-2"><label>inspector</label>
                        <select class="form-select" name="ins" id="repomonitins" onchange="searchbydaterepomonit();">
                          <option value="0">Select inspector</option>
                          <?php
                          $rsrpins = Database::search("SELECT * FROM inspector;");
                          $nrpins = $rsrpins->num_rows;
                          for ($i = 0; $i < $nrpins; $i++) {
                            $drpind = $rsrpins->fetch_assoc();
                          ?>
                            <option value="<?php echo $drpind["id"] ?>"><?php echo $drpind["name"] ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="col-12 col-lg-2"><label>Companies</label>
                        <select class="form-select" name="compn" id="repomonitcompn" onchange="searchbydaterepomonit();">
                          <option value="0">Select Company</option>
                          <?php
                          $rsrpins = Database::search("SELECT * FROM company;");
                          $nrpins = $rsrpins->num_rows;
                          for ($i = 0; $i < $nrpins; $i++) {
                            $drpind = $rsrpins->fetch_assoc();
                          ?>
                            <option value="<?php echo $drpind["id"] ?>"><?php echo $drpind["company_name"] ?></option>
                          <?php
                          }
                          ?>
                        </select>
                      </div>
                      <div class="col-12 col-lg-2"><label>Monitored Type</label>
                        <select class="form-select" name="monitt" id="repomonitmonit" onchange="searchbydaterepomonit();">
                          <option value="0">Select Monitored Type</option>
                          <option value="1">Monitoring 1</option>
                          <option value="2">Monitoring 2</option>
                          <option value="3">Monitoring 3</option>
                        </select>
                      </div>

                      <div class="col-12 col-lg-8"><label>Search</label>
                        <input type="text" id="repomonitsrch" name="srch" onkeyup="searchbydaterepomonit();" class="form-control">
                      </div>
                      <div class="col-12 col-lg-4 offset-lg-0 d-grid">
                        <button type="submit" class="btn btn-outline-primary fw-bold shadow m-2">Download Report</button>
                      </div>
                    </div>
                  </form>
                  <div class="col-12 mt-2" id="repmonittbl">
                    <table class="table table-responsive shadow stdn">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">NAITA Id</th>
                          <th scope="col">Student Id</th>
                          <th scope="col">Student Full Name</th>
                          <th scope="col">N.I.C.</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="x" style="background-color: aquamarine;">
                          <td class="text-center fw-bold" colspan="5">Pleace Select Time Duration</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- REPORTS -->
          <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- ASSESMENTS -->
          <!-- ============================================================== -->
          <div class="col-12 " id="assmnts" style="display: none;">
            <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Assessments</h1>
            <div class="row">
              <div class="col-12 mt-4">
                <div class="row g-2">
                  <div class="col-12">
                    <form class="row g-2" action="admin_assessment_data_export.php" method="POST">
                      <div class="col-12 col-lg-2 offset-lg-0 d-grid mb-3">
                        <button class="btn btn-outline-primary fw-bold shadow" type="submit">Export data as a excel</button>
                      </div>
                      <div class="col-12 col-lg-3 offset-lg-0 d-grid mb-3">
                        <!-- <button class="btn btn-outline-primary fw-bold shadow" type="button">Export data for the Certificate devision</button> -->
                        <a href="admin_assessment_data_export_book_certificate.php" class="btn btn-outline-primary fw-bold shadow">Export data for the Certificate devision</a>
                      </div>
                      <div class="col-12 col-lg-3 offset-lg-0 d-grid mb-3">
                        <!-- <button class="btn btn-outline-primary fw-bold shadow" type="button">Export data for log book</button> -->
                        <a href="admin_assessment_data_export_book.php" class="btn btn-outline-primary fw-bold shadow">Export data for log book</a>
                      </div>
                      <div class="col-12 col-lg-3 offset-lg-1 d-grid mb-3">
                        <button class="btn btn-outline-primary fw-bold shadow" data-bs-toggle="modal" data-bs-target="#create_assessment" type="button">Create Assessment</button>
                      </div>
                      <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Search" id="admin_assessment_sort_srch" name="admin_assessment_sort_srch" onkeyup="admin_assessment_sort();">
                      </div>
                      <div class="col-12 col-lg-3">
                        <select class="form-select" onchange="admin_assessment_sort();" id="admin_assessment_sort_preabs" name="admin_assessment_sort_preabs">
                          <option value="x">Select present or absent</option>
                          <option value="1">Present</option>
                          <option value="2">Absent</option>
                        </select>
                      </div>
                      <div class="col-12 col-lg-3">
                        <select class="form-select" onchange="admin_assessment_sort();" id="admin_assessment_sort_psfl" name="admin_assessment_sort_psfl">
                          <option value="x">Select Pass or Fail</option>
                          <option value="1">Pass</option>
                          <option value="2">Fail</option>
                          <option value="3">pending</option>
                        </select>
                      </div>
                      <div class="col-12 col-lg-3"><label class="form-label">from</label>
                        <input type="date" class="form-control" onclick="admin_assessment_sort();" id="admin_assessment_sort_from" name="admin_assessment_sort_from">
                      </div>
                      <div class="col-12 col-lg-3"><label class="form-label">to</label>
                        <input type="date" placeholder="kkkkkk" class="form-control" onclick="admin_assessment_sort();" id="admin_assessment_sort_to" name="admin_assessment_sort_to">
                      </div>
                      <div class="col-12 col-lg-3 d-grid"><label class="form-label"></label>
                        <button class="btn btn-outline-primary fw-bold" onclick="admin_assessment_sort();" type="button">Search</button>
                      </div>
                    </form>
                  </div>

                </div>
              </div>
              <div class="col-12 table-responsive shadow mt-4" id="admin_assessment_sort_table">
                <h4>All Assessment Selected and faced Students</h4>
                <table class=" table table-striped  " id="assessment_table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NAITA ID</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Worksite</th>
                      <th scope="col">Training Place</th>
                      <th scope="col">University</th>
                      <th scope="col">Field</th>
                      <th scope="col">Assessment date</th>
                      <th scope="col">Assessment Status</th>
                      <th scope="col">participation</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody id="pg_admin_assessment_all_assessment">
                    <?php
                    $rs_admin_assessment = Database::search("SELECT * FROM assessment
                      INNER JOIN inspector ON assessment.inspector_ins_id=inspector.ins_id
                      INNER JOIN admin ON inspector.admin_ad_id=admin.ad_id
                      INNER JOIN as_status ON assessment.as_status_asstat_id=as_status.asstat_id
                      INNER JOIN participation ON assessment.participation_parti_id=participation.parti_id
                      INNER JOIN periods ON assessment.periods_period_id=periods.period_id
                      INNER JOIN student ON assessment.student_st_id=student.st_id
                      INNER JOIN field ON student.field_fld_id=field.fld_id
                      INNER JOIN degree ON field.fld_deg_id=degree.deg_id
                      INNER JOIN university ON degree.deg_uni_id=university.uni_id
                      INNER JOIN training_establishment ON training_establishment.tran_est_st_id=student.st_id
                      INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
                      INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id;");

                    for ($i = 0; $i < $rs_admin_assessment->num_rows; $i++) {
                      $d_admin_assessmen = $rs_admin_assessment->fetch_assoc();
                    ?>
                      <tr class="table-warning">
                        <td><?= $i + 1; ?></td>
                        <td><?= $d_admin_assessmen['naita_id']; ?></td>
                        <td><?= $d_admin_assessmen['first_name']; ?></td>
                        <td><?= $d_admin_assessmen['wrksit_name']; ?></td>
                        <td><?= $d_admin_assessmen['tran_plc_name']; ?></td>
                        <td><?= $d_admin_assessmen['uni_name']; ?></td>
                        <td><?= $d_admin_assessmen['fld_name']; ?></td>
                        <td><?= $d_admin_assessmen['as_date']; ?></td>
                        <td>
                          <select class="form-select" id="assess_select_pass<?= $d_admin_assessmen['naita_id']; ?>">
                            <?php
                            $rs_admin_assessment_stat = Database::search("SELECT * FROM as_status;");
                            while ($d_admin_assessment_stat = $rs_admin_assessment_stat->fetch_assoc()) {
                              if ($d_admin_assessment_stat['status'] == $d_admin_assessmen['status']) {
                            ?>
                                <option value="<?= $d_admin_assessment_stat['asstat_id']; ?>" selected><?= $d_admin_assessment_stat['status']; ?></option>
                              <?php
                              } else {
                              ?>
                                <option value="<?= $d_admin_assessment_stat['asstat_id']; ?>"><?= $d_admin_assessment_stat['status']; ?></option>
                            <?php
                              }
                            }
                            ?>
                          </select>
                        </td>
                        <td>
                          <select class="form-select" id="assess_select_present<?= $d_admin_assessmen['naita_id']; ?>">
                            <?php
                            $rs_admin_assessment_pati = Database::search("SELECT * FROM participation;");
                            while ($d_admin_assessment_pati = $rs_admin_assessment_pati->fetch_assoc()) {
                              if ($d_admin_assessment_pati['parti_id'] == $d_admin_assessmen['participation_parti_id']) {
                            ?>
                                <option selected value="<?= $d_admin_assessment_pati['parti_id'] ?>"><?= $d_admin_assessment_pati['parti_stat'] ?></option>
                              <?php
                              } else {
                              ?>
                                <option value="<?= $d_admin_assessment_pati['parti_id'] ?>"><?= $d_admin_assessment_pati['parti_stat'] ?></option>
                            <?php
                              }
                            }
                            ?>
                          </select>
                        </td>
                        <td>
                          <div class="col d-grid">
                            <button class="btn btn-outline-primary fw-bold" onclick="assessment_checked('<?= $d_admin_assessmen['naita_id']; ?>');">Submit</button>
                          </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- ASSESMENTS -->
          <!-- ============================================================== -->

          <!-- ============================================================== -->
          <!-- Monitoring -->
          <!-- ============================================================== -->
          <div class="col-12 " id="monit" style="display: none;">
            <h1 class="text-decoration-underline text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Monitoring</h1>
            <div class="row">

              <?php

              if (isset($_SESSION["SA"])) {


              ?>

                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-lg-4 d-grid">
                      <button class="btn btn-outline-primary fw-bold shadow mt-lg-0 mt-2" data-bs-toggle="modal" data-bs-target="#add_inspector" type="button">Add Inspector</button>
                    </div>
                    <div class="col-12 col-lg-4 d-grid">
                      <button class="btn btn-outline-primary fw-bold shadow mt-lg-0 mt-2" data-bs-toggle="modal" data-bs-target="#add_admin" type="button">Add Admin</button>
                    </div>
                  </div>
                </div>
                <div class="col-12 mt-2">
                  <h4>Inspectors</h4>

                  <?php

                  $rstb1 = Database::search("SELECT * FROM inspector 
                  INNER JOIN admin ON inspector.admin_ad_id=admin.ad_id
                  INNER JOIN admin_type ON admin.ad_admin_typ_id=admin_type.admn_typ_id;");
                  $tbn1 = $rstb1->num_rows;
                  ?>

                  <table class=" table table-responsive table-striped border border-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIC</th>
                        <th scope="col">Admin Type</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      for ($i = 0; $i < $tbn1; $i++) {
                        $tbd2 = $rstb1->fetch_assoc();

                      ?>
                        <tr onclick="INSselctST('<?= $tbd2['ins_id']; ?>');" id="<?= $tbd2['ad_nic']; ?>" class="clickable">
                          <td><?= $tbd2["ins_id"]; ?></td>
                          <td><?= $tbd2["name"]; ?></td>
                          <td><?= $tbd2["ad_nic"]; ?></td>
                          <td><?= $tbd2["admn_typ"]; ?></td>
                        </tr>

                      <?php

                      }

                      ?>

                    </tbody>
                  </table>
                </div>
                <div class="col-12 col-lg-12">

                  <div id="insst">

                  </div>

                </div>


                <?php
              } elseif (isset($_SESSION["AD"])) {

                $insrs = Database::search("SELECT * FROM inspector WHERE admin_ad_id='" . $_SESSION["AD"]["ad_id"] . "';");
                $insn = $insrs->num_rows;

                if ($insn == 1) {

                  $insd =  $insrs->fetch_assoc();

                ?>

                  <div class="row">

                    <div class="col-12 border p-2">

                      <div class="row">

                        <!-- searchbar -->
                        <div class="col-12 col-lg-4">
                          <input type="text" name="sb" class="form-control" onkeyup="searchmonitorInspect();" id="sb" placeholder="Search Available Training Students to Monitoring">
                        </div>
                        <!-- company -->
                        <div class="col-12 col-lg-4">
                          <select name="sc" id="sc" onclick="searchmonitorInspect();" class="form-control">
                            <option value="x">select Worksite</option>
                            <?php
                            $c = Database::search("SELECT * FROM worksite;");
                            $n = $c->num_rows;
                            for ($i = 0; $i < $n; $i++) {
                              $d = $c->fetch_assoc();
                            ?>
                              <option value="<?= $d["wrksit_id"]; ?>"><?= $d["wrksit_name"]; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <!-- monitoring_date -->
                        <div class="col-12 col-lg-4">
                          <input class="form-control" type="date" id="monitoring_date">
                        </div>
                        <!-- University -->
                        <div class="col-12 col-lg-4 mt-2">
                          <select id="su" class="form-control" onclick="searchmonitorInspect();">
                            <option value="x">select university</option>
                            <?php

                            $u = Database::search("SELECT * FROM university;");
                            $un = $u->num_rows;
                            for ($i = 0; $i < $un; $i++) {
                              $ud = $u->fetch_assoc();
                            ?>
                              <option value="<?= $ud["uni_id"]; ?>"><?= $ud["uni_name"]; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <!-- Field -->
                        <div class="col-12 col-lg-4 mt-2">
                          <select id="sf" class="form-control" onclick="searchmonitorInspect();">
                            <option value="x">select Field</option>
                            <?php
                            $f = Database::search("SELECT * FROM field
                              INNER JOIN degree ON field.fld_deg_id=degree.deg_id
                              INNER JOIN univerfsity ON degree.deg_uni_id=university.uni_id;");
                            $fn = $f->num_rows;
                            for ($i = 0; $i < $fn; $i++) {
                              $fd = $f->fetch_assoc();
                            ?>
                              <option value="<?= $fd["fld_id"]; ?>"><?= $fd["fld_name"]; ?> - <?= $fd["degree_name"]; ?> - <?= $ud["uni_name"]; ?></option>
                            <?php
                            }
                            ?>
                          </select>
                        </div>
                        <!-- Monitered Phase -->
                        <div class="col-12 col-lg-4 mt-2">
                          <select id="sm" class="form-control" onclick="searchmonitorInspect();">
                            <option value="x">select Monitered Phase</option>
                            <option value="1">Monitoring 1</option>
                            <option value="2">Monitoring 2</option>
                            <option value="3">Monitoring 3</option>
                          </select>
                        </div>

                      </div>

                    </div>

                    <div id="tb" class="col-12">
                      <h4 onclick="searchmonitorInspect('<?= $insd['ins_id']; ?>');" style="height: 400px; padding-top: 180px; border-style: dashed; border-color: #0000004b;" class="text-center mt-4   justify-content-center">
                        If the tables are not loaded, click here.
                      </h4>
                    </div>

                  </div>

                <?php

                } else {

                ?>

                  <h4>Youre not an inspector</h4>

              <?php

                }
              }


              ?>



            </div>
          </div>
          <!-- ============================================================== -->
          <!-- Monitoring -->
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

    <!-- ================ Add Students ========================================== -->

    <div class="modal fade " id="add_student" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <small class="text-success fw-bold fs-4 text-center mt-2" id="admnaddegalrt"></small>
          <div class="modal-header">
            <h1 class="text-center text-uppercase fw-bold ">Student Register</h1>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>First Name</label>
                <small id="ad_st_FName_SM" style="display: none;" class="text-danger">Please Enter First Name</small>
                <input type="text" class="form-control" id="ad_st_FName" placeholder="Type First Name">
              </div>
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>Last Name</label>
                <small id="ad_st_LName_SM" style="display: none;" class="text-danger">Please Enter Last Name</small>
                <input type="text" class="form-control" id="ad_st_LName" placeholder="Type Last Name">
              </div>
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>Full Name</label>
                <small id="ad_st_FullName_SM" style="display: none;" class="text-danger">Please Enter Full Name</small>
                <input type="text" class="form-control" id="ad_st_FullName" placeholder="Type Full Name">
              </div>
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>Full Name With Initials</label>
                <small id="ad_st_FullNameInit_SM" style="display: none;" class="text-danger">Please Enter Full Name With Initials</small>
                <input type="text" class="form-control" id="ad_st_FullNameInit" placeholder="Type Full Name With Initials">
              </div>
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>Enter Address</label>
                <small id="ad_st_Address_SM" style="display: none;" class="text-danger">Please Enter Address</small>
                <input type="text" class="form-control" id="ad_st_Address" placeholder="Type Address">
              </div>
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>Gender</label>
                <small id="ad_st_Gender_SM" style="display: none;" class="text-danger">Please Select Gender</small>
                <?php
                $rs2 = Database::search("SELECT * FROM gender;");
                $n = $rs2->num_rows;
                ?>
                <select class="form-select bg-transparent " id="ad_st_Gender">
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
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>N.I.C no</label>
                <small id="ad_st_NIC_SM" style="display: none;" class="text-danger">Please Enter N.I.C no</small>
                <input type="text" class="form-control" id="ad_st_NIC" placeholder="Type N.I.C no">
              </div>
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>Mobile no</label>
                <small id="ad_st_Mobile_SM" style="display: none;" class="text-danger">Please Enter Mobile no</small>
                <input type="text" class="form-control" id="ad_st_Mobile" placeholder="Type Mobile no">
              </div>
              <div class="col-12 g-2">
                <label class="form-label">Land line no</label>
                <small id="ad_st_Landline_SM" style="display: none;" class="text-danger">Please Enter Land line no</small>
                <input type="text" class="form-control" id="ad_st_Landline" placeholder="Type Land line no">
              </div>
              <div class="col-12 g-2">
                <label class="form-label"><span class="text-danger">*</span>Email Address</label>
                <small id="ad_st_Email_SM" style="display: none;" class="text-danger">Please Enter Your Email Address</small>
                <input type="text" class="form-control" id="ad_st_Email" placeholder="Type Email Address">
              </div>
              <div class="col-12 g-2 ">
                <label class="form-label"><span class="text-danger">*</span>University or Institute</label><br>
                <small id="ad_st_Uni_SM" style="display: none;" class="text-danger">Please Select Your University or Institute</small>
                <?php
                $rs2 = Database::search("SELECT * FROM university;");
                $n = $rs2->num_rows;
                ?>
                <select class="form-select bg-transparent " id="ad_st_Uni">
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
                <small id="ad_st_Degree_SM" style="display: none;" class="text-danger">Please Enter Your Degree / Diploma / NVQ</small>
                <?php
                $rs2 = Database::search("SELECT DISTINCT degree_name FROM degree;");
                $n = $rs2->num_rows;
                ?>
                <select class="form-select bg-transparent " id="ad_st_Degree">
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
                <small id="ad_st_Field_SM" style="display: none;" class="text-danger">Please Select Your Field</small>
                <?php
                $rs2 = Database::search("SELECT DISTINCT fld_name FROM field;");
                $n = $rs2->num_rows;
                ?>
                <select class="form-select bg-transparent " id="ad_st_Field">
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
              <div class="col-12 g-2 ">
                <label class="form-label"><span class="text-danger">*</span>Password</label>
                <small id="ad_st_Pass_SM" style="display: none;" class="text-danger">Please Enter Your Password</small>
                <input type="text" class="form-control" id="ad_st_Pass" placeholder="Type Password">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
              <small id="ad_st_main_SM" class="text-danger fs-4 text-center pb-4"></small>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_student_reg_close();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button class="btn btn-outline-primary fw-bold fs-4 " onclick="admin_student_reg();">Register now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================ Add Students ========================================== -->

    <!-- ========================================All Students============================================ -->

    <div class="modal fade" id="all_students" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase" id="staticBackdropLabel">All Students</h1>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" onkeyup="admin_all_full_students_data();" id="admin_all_full_students_data_search" placeholder="Type to search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></span>
                </div>
              </div>
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <th scope="col">#</th>
                      <th scope="col">Registration no</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Full Name</th>
                      <th scope="col">NIC</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Email Address</th>
                      <th scope="col">Mobile Number</th>
                      <th scope="col">Land Number</th>
                      <th scope="col">Address</th>
                      <th scope="col">University</th>
                      <th scope="col">Degree</th>
                      <th scope="col">Field</th>
                      <th scope="col">Registered Date</th>
                    </thead>
                    <tbody id="admin_all_full_students_data">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger fw-bold shadow" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ========================================All Students============================================ -->

    <!-- ========================== All Training Established Students =============================== -->

    <div class="modal fade" id="all_training_established_students" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase" id="staticBackdropLabel">All Training Established Students</h1>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" onkeyup="admin_all_students_data();" id="admin_all_students_data_search" placeholder="Type to search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                  <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></span>
                </div>
              </div>
              <div class="col-12">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <th scope="col">#</th>
                      <th scope="col">Registration no</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">Full Name</th>
                      <th scope="col">NIC</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Email Address</th>
                      <th scope="col">Mobile Number</th>
                      <th scope="col">Land Number</th>
                      <th scope="col">Address</th>
                      <th scope="col">University</th>
                      <th scope="col">Degree</th>
                      <th scope="col">Field</th>
                      <th scope="col">Registered Date</th>
                      <th scope="col">Training Place</th>
                      <th scope="col">Worksite</th>
                    </thead>
                    <tbody id="admin_all_students_data">
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger fw-bold shadow" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ========================== All Training Established Students =============================== -->

    <!-- ========================== Create Assessment =============================== -->

    <div class="modal fade" id="create_assessment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase" id="staticBackdropLabel">Create Assessment</h1>
          </div>
          <div class="modal-body">
            <h4 class="text-center text-danger fw-bold p-1" id="createassesmnt_main"></h4>
            <div class="row">
              <div class="col-12 col-lg-3 mt-2">
                <?php
                $rs_createassesmnt_uni = Database::search("SELECT * FROM university;");
                $n_createassesmnt_uni = $rs_createassesmnt_uni->num_rows;
                ?>
                <select class="form-select bg-transparent" id="createassesmnt_uni" onchange="select_students_to_assessment();">
                  <option value="x">Select University</option>
                  <?php
                  for ($i = 0; $i < $n_createassesmnt_uni; $i++) {
                    $d_createassesmnt_uni = $rs_createassesmnt_uni->fetch_assoc();
                  ?>
                    <option value="<?= $d_createassesmnt_uni["uni_id"]; ?>"><?= $d_createassesmnt_uni["uni_name"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">
                <?php
                $rs_createassesmnt_batch = Database::search("SELECT DISTINCT YEAR(reg_date) FROM student;");
                $n_createassesmnt_batch = $rs_createassesmnt_batch->num_rows;
                ?>
                <select class="form-select bg-transparent" id="createassesmnt_batch" onchange="select_students_to_assessment();" disabled>
                  <option value="x">Select Batch</option>
                  <?php
                  for ($i = 0; $i < $n_createassesmnt_batch; $i++) {
                    $d_createassesmnt_batch = $rs_createassesmnt_batch->fetch_assoc();

                  ?>
                    <option value="<?= $d_createassesmnt_batch["YEAR(reg_date)"]; ?>"><?= $d_createassesmnt_batch["YEAR(reg_date)"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">
                <?php
                $rs_createassesmnt_degre = Database::search("SELECT DISTINCT degree_name FROM degree;");
                $n_createassesmnt_degre = $rs_createassesmnt_degre->num_rows;
                ?>
                <select class="form-select bg-transparent" id="createassesmnt_degre" onchange="select_students_to_assessment();" disabled>
                  <option value="x">Select Degree</option>
                  <?php
                  for ($i = 0; $i < $n_createassesmnt_degre; $i++) {
                    $d_createassesmnt_degre = $rs_createassesmnt_degre->fetch_assoc();

                  ?>
                    <option value="<?= $d_createassesmnt_degre["degree_name"]; ?>"><?= $d_createassesmnt_degre["degree_name"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">
                <?php
                $rs_createassesmnt_field = Database::search("SELECT DISTINCT fld_name FROM field;");
                $n_createassesmnt_field = $rs_createassesmnt_field->num_rows;
                ?>
                <select class="form-select bg-transparent" id="createassesmnt_field" onchange="select_students_to_assessment();" disabled>
                  <option value="x">Select Field</option>
                  <?php
                  for ($i = 0; $i < $n_createassesmnt_field; $i++) {
                    $d_createassesmnt_field = $rs_createassesmnt_field->fetch_assoc();

                  ?>
                    <option value="<?= $d_createassesmnt_field["fld_name"]; ?>"><?= $d_createassesmnt_field["fld_name"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 col-lg-3 mt-2">
                <input class="form-control" type="date" id="createassesmnt_date" id="createassesmnt_date">
              </div>
              <div class="col-12 mt-2">
                <div class="table-responsive" id="createassesmnt_table">
                  <table class=" table table-striped  ">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Select</th>
                        <th scope="col">NAITA ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Worksite</th>
                        <th scope="col">Training Place</th>
                        <th scope="col">University</th>
                        <th scope="col">Field</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      ?>
                      <tr style="background-color: #ffb45f67;">
                        <td colspan="8" class="text-center ">Select Students</td>
                      </tr>
                      <?php

                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger fw-bold shadow" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-outline-primary fw-bold shadow" id="createassesmnt_button" disabled onclick="assessment_create();">Create</button>
          </div>
        </div>
      </div>
    </div>

    <!-- ========================== Create Assessment =============================== -->

    <!-- ================== add University ======================================================= -->

    <div class="modal fade " id="add_university" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase">University Or Institute Register</h1>
          </div>
          <small class="text-success fw-bold fs-4 text-center mt-2 d-block" id="admin_uni_reg_uni_main_sm"></small>
          <div class="modal-body">
            <div class="row ">
              <div class="col-12">
                <div class="row ">
                  <div class="col-12 ">
                    <div class="row">
                      <div class="col-12 g-2 ">
                        <label class="form-label"><span class="text-danger">*</span>University or Institute</label>
                        <small id="admin_uni_reg_uni_type_sm" class="small text-danger d-block"></small>
                        <?php

                        $runiuni = Database::search("SELECT * FROM uni_type;");
                        $nuniuni = $runiuni->num_rows;

                        ?>
                        <select class="form-select bg-transparent " id="admin_uni_reg_uni_type">
                          <option value="x">Select University or Institute</option>
                          <?php

                          for ($k = 0; $k < $nuniuni; $k++) {
                            $uniuni = $runiuni->fetch_assoc();

                          ?>
                            <option value="<?= $uniuni['uni_typ_id']; ?>"><?= $uniuni['uni_typ']; ?></option>
                          <?php
                          }

                          ?>
                        </select>
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label" id="uin"><span class="text-danger">*</span>University or Institute Name</label>
                        <small id="admin_uni_reg_uni_sm" class="small text-danger d-block"></small>
                      </div>
                      <input type="text" class="form-control" id="admin_uni_reg_uni">
                      <div class="col-12  g-2">
                        <label class="form-label" id="uig"><span class="text-danger">*</span>Is this Government University or Institute</label>
                        <small id="admin_uni_reg_uni_gov_sm" class="small text-danger d-block"></small>
                        <select id="admin_uni_reg_uni_gov" class="form-select bg-transparent ">
                          <option value="x">Is This government</option>
                          <?php

                          $rgovuni = Database::search("SELECT * FROM gov_status;");
                          $ngovuni = $rgovuni->num_rows;

                          for ($i = 0; $i < $ngovuni; $i++) {
                            $govuni = $rgovuni->fetch_assoc();

                          ?>
                            <option value="<?= $govuni['govstat_id']; ?>"><?= $govuni['gov_stat']; ?></option>
                          <?php
                          }

                          ?>
                        </select>
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label" id="uia"><span class="text-danger">*</span>University or Institute Located Address</label>
                        <small id="admin_uni_reg_uni_addr_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_uni_reg_uni_addr">
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label" id="uie"><span class="text-danger">*</span>Email Address of the University or Institute</label>
                        <small id="admin_uni_reg_uni_email_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_uni_reg_uni_email">
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label"><span class="text-danger">*</span>Telephone number 1</label>
                        <small id="admin_uni_reg_uni_teli_1_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_uni_reg_uni_teli_1">
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label">Telephone number 2</label>
                        <small id="admin_uni_reg_uni_teli_2_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_uni_reg_uni_teli_2">
                      </div>
                      <div class="col-12 g-2">
                        <label class="form-label"><span class="text-danger">*</span>Password</label>
                        <small id="admin_uni_reg_uni_pass_sm" class="small text-danger d-block"></small>
                        <input type="text" class="form-control" id="admin_uni_reg_uni_pass">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_uni_reg_close();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button class="btn btn-outline-primary fw-bold text-uppercase" onclick="admin_uni_reg();">Register now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================== add University ======================================================= -->

    <!-- ================== add degree ======================================================= -->

    <div class="modal fade " id="add_degree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase fs-2">Add Degree</h1>
          </div>
          <div class="modal-body">
            <small class="text-success fs-4 text-center mt-2" id="admin_add_deg_main"></small>
            <div class="row">
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Select University or Institute</label><br>
                <small id="admin_add_deg_uni_sm" class="small text-danger d-block"></small>
                <?php
                $rs_admin_add_degree_uni = Database::search("SELECT * FROM university;");
                $n_admin_add_degree_uni = $rs_admin_add_degree_uni->num_rows;
                ?>
                <select class="form-select bg-transparent" id="admin_add_deg_uni">
                  <option value="x">Select Your University</option>
                  <?php
                  for ($i = 0; $i < $n_admin_add_degree_uni; $i++) {
                    $d_admin_add_degree_uni = $rs_admin_add_degree_uni->fetch_assoc();
                  ?>
                    <option value="<?= $d_admin_add_degree_uni["uni_id"]; ?>"><?= $d_admin_add_degree_uni["uni_name"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Degree Name</label><br>
                <small id="admin_add_deg_deg_sm" class="small text-danger d-block"></small>
                <select class="form-select bg-transparent" id="admin_add_deg_deg" onchange="admin_add_other_degree(this);">
                  <option value="x">Select Your Degree</option>
                  <option value="y">Enter Other Degree</option>
                  <?php
                  $rs_admin_add_degree_deg = Database::search("SELECT * FROM degree;");
                  $n_admin_add_degree_deg = $rs_admin_add_degree_deg->num_rows;
                  for ($i = 0; $i < $n_admin_add_degree_deg; $i++) {
                    $d_admin_add_degree_deg = $rs_admin_add_degree_deg->fetch_assoc();
                  ?>
                    <option value="<?= $d_admin_add_degree_deg["degree_name"]; ?>"><?= $d_admin_add_degree_deg["degree_name"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12">
                <small id="admin_add_deg_deg_other_sm" class="small text-danger d-block"></small>
                <input type="text" class="form-control mt-2" placeholder="Type Other Degree Name" style="display: none;" id="admin_add_deg_deg_other">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_add_deg_uni_close();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-primary fw-bold" onclick="admin_add_deg();">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================== add degree ======================================================= -->

    <!-- =========================== add field ================================================= -->

    <div class="modal fade " id="add_field" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase fs-2" id="staticBackdropLabel">Add Field</h1>
          </div>
          <div class="modal-body">
            <small id="admin_add_field_main"></small>
            <div class="row">
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Select Degree</label><br>
                <small id="admin_add_field_deg_sm" class="small text-danger d-block"></small>
                <?php
                $rs_admin_add_field_deg = Database::search("SELECT * FROM degree INNER JOIN university ON degree.deg_uni_id=university.uni_id;");
                $n_admin_add_field_deg = $rs_admin_add_field_deg->num_rows;
                ?>
                <select class="form-select bg-transparent" id="admin_add_field_deg">
                  <option value="x">Select Your Degree</option>
                  <?php
                  for ($i = 0; $i < $n_admin_add_field_deg; $i++) {
                    $d_admin_add_field_deg = $rs_admin_add_field_deg->fetch_assoc();
                  ?>
                    <option value="<?= $d_admin_add_field_deg["deg_id"]; ?>"><?= $d_admin_add_field_deg["degree_name"] . ' - ' . $d_admin_add_field_deg["uni_name"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Field Name</label><br>
                <small id="admin_add_field_field_sm" class="small text-danger d-block"></small>
                <input type="text" class="form-control" placeholder="Type Field Name" id="admin_add_field_field">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_add_field_field_close();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-primary fw-bold" onclick="admin_add_field();">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- =========================== add field ================================================= -->

    <!-- ================================add work site=============================================== -->

    <div class="modal fade " id="add_worksite" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase fs-2">Add Worksite</h1>
          </div>
          <div class="modal-body">
            <small class="text-danger fw-bold" id="admin_add_worksite_warn"></small>
            <div class="row">
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Worksite Name</label><br>
                <input type="text" class="form-control" placeholder="Type Worksite Name" id="admin_add_worksite_name">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Worksite Address</label><br>
                <input type="text" class="form-control" placeholder="Type Worksite Address" id="admin_add_worksite_address">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Worksite Email</label><br>
                <input type="text" class="form-control" placeholder="Type Worksite Name" id="admin_add_worksite_email">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Worksite Contact 1</label><br>
                <input type="text" class="form-control" placeholder="Type Worksite Contact 1" id="admin_add_worksite_contact_1">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Worksite Contact 2</label><br>
                <input type="text" class="form-control" placeholder="Type Worksite Contact 2" id="admin_add_worksite_contact_2">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Select District</label><br>
                <?php
                $admin_add_worksite_district_rs = Database::search("SELECT * FROM districts;");
                $admin_add_worksite_district_num = $admin_add_worksite_district_rs->num_rows;
                ?>
                <select class="form-select bg-transparent" id="admin_add_worksite_district">
                  <option value="x">Select District</option>
                  <?php
                  for ($i = 0; $i < $admin_add_worksite_district_num; $i++) {
                    $admin_add_worksite_district_dt = $admin_add_worksite_district_rs->fetch_assoc();
                  ?>
                    <option value="<?= $admin_add_worksite_district_dt["district_id"]; ?>"><?= $admin_add_worksite_district_dt["district"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
            </div>
            <div class="col-12 ">
              <label class="form-label"><span class="text-danger">*</span>Select Training Place</label><br>
              <?php
              $admin_add_worksite_district_rs = Database::search("SELECT * FROM worksite
                INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id;");
              $admin_add_worksite_district_num = $admin_add_worksite_district_rs->num_rows;
              ?>
              <select class="form-select bg-transparent" id="admin_add_worksite_training_place">
                <option value="x">Select Training Place</option>
                <?php
                for ($i = 0; $i < $admin_add_worksite_district_num; $i++) {
                  $admin_add_worksite_district_dt = $admin_add_worksite_district_rs->fetch_assoc();
                ?>
                  <option value="<?= $admin_add_worksite_district_dt["wrksit_id"]; ?>"><?= $admin_add_worksite_district_dt["wrksit_name"]; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
              <p class="fs-4 text-danger text-center" id="admin_add_inspector_main"></p>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_add_ADD_worksite_clear();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-primary fw-bold" onclick="admin_add_ADD_worksite();">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============================add work site================================================ -->

    <!-- ================================add training Place=============================================== -->

    <div class="modal fade " id="add_training_place" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase fs-2" id="staticBackdropLabel">Add Training Place</h1>
          </div>
          <div class="modal-body">
            <small class="text-danger fw-bold" id="admin_add_training_place_warn"></small>
            <div class="row">
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Training Place Name</label><br>
                <input type="text" class="form-control" placeholder="Type Training Place Name" id="admin_add_training_place_name">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Training Place Address</label><br>
                <input type="text" class="form-control" placeholder="Type Training Place Address" id="admin_add_training_place_address">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Training Place Email</label><br>
                <input type="text" class="form-control" placeholder="Type Training Place Name" id="admin_add_training_place_email">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Training Place Contact 1</label><br>
                <input type="text" class="form-control" placeholder="Type Training Place Address" id="admin_add_training_place_contact_1">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Training Place Contact 2</label><br>
                <input type="text" class="form-control" placeholder="Type Training Place Address" id="admin_add_training_place_contact_2">
              </div>
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Select District</label><br>
                <?php
                $admin_add_training_place_district_rs = Database::search("SELECT * FROM districts;");
                $admin_add_training_place_district_num = $admin_add_training_place_district_rs->num_rows;
                ?>
                <select class="form-select bg-transparent" id="admin_add_training_place_district">
                  <option value="x">Select District</option>
                  <?php
                  for ($i = 0; $i < $admin_add_training_place_district_num; $i++) {
                    $admin_add_training_place_district_dt = $admin_add_training_place_district_rs->fetch_assoc();
                  ?>
                    <option value="<?= $admin_add_training_place_district_dt["district_id"]; ?>"><?= $admin_add_training_place_district_dt["district"]; ?></option>
                  <?php
                  }
                  ?>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label"><span class="text-danger">*</span>Training Place Coordinator</label><br>
                <input type="text" class="form-control" placeholder="Type Training Place Coordinator" id="admin_add_training_place_coordinator">
              </div>
              <div class="col-12">
                <label class="form-label"><span class="text-danger">*</span>Training Place Coordinator Position</label><br>
                <input type="text" class="form-control" placeholder="Type Training Place Coordinator Position" id="admin_add_training_place_coordinator_position">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
              <p class="fs-4 text-danger text-center" id="admin_add_inspector_main"></p>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_add_ADD_training_place_clear();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-primary fw-bold" onclick="admin_add_ADD_training_place();">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============================add training Place================================================ -->

    <!-- ================================add inspector=============================================== -->

    <div class="modal fade " id="add_inspector" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase fs-2" id="staticBackdropLabel">Add Inspector</h1>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12 ">
                <label class="form-label"><span class="text-danger">*</span>Select Admin</label><br>
                <small id="admin_add_field_inspector_sm" class="small text-danger d-block"></small>
                <?php
                $rs_admin_add_field_inspector = Database::search("SELECT * FROM admin 
                  INNER JOIN admin_type ON admin.ad_admin_typ_id=admin_type.admn_typ_id;");
                $n_admin_add_field_inspector = $rs_admin_add_field_inspector->num_rows;
                ?>
                <select class="form-select bg-transparent" id="admin_add_inspector">
                  <option value="x">Select Admin</option>
                  <?php
                  for ($i = 0; $i < $n_admin_add_field_inspector; $i++) {
                    $d_admin_add_field_inspector = $rs_admin_add_field_inspector->fetch_assoc();

                    $d_admin_add_field_inspector_ins_rs = Database::search("SELECT * FROM inspector WHERE admin_ad_id='" . $d_admin_add_field_inspector["ad_id"] . "';");
                    $d_admin_add_field_inspector_ins_dt = $d_admin_add_field_inspector_ins_rs->fetch_assoc();

                    if ($d_admin_add_field_inspector['ad_id'] == $d_admin_add_field_inspector_ins_dt['admin_ad_id']) {
                  ?>
                      <option value="<?= $d_admin_add_field_inspector["ad_id"]; ?>"><?= $d_admin_add_field_inspector["name"] . ' | ' . $d_admin_add_field_inspector["admn_typ"] . ' | ' . $d_admin_add_field_inspector["ad_nic"]; ?><span> : INSPECTOR</span></option>
                    <?php
                    } else {
                    ?>
                      <option value="<?= $d_admin_add_field_inspector["ad_id"]; ?>"><?= $d_admin_add_field_inspector["name"] . ' | ' . $d_admin_add_field_inspector["admn_typ"] . ' | ' . $d_admin_add_field_inspector["ad_nic"]; ?></option>
                  <?php
                    }
                  }
                  ?>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row w-100">
              <p class="fs-4 text-danger text-center" id="admin_add_inspector_main"></p>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="admin_add_inspector_close();">Close</button>
              </div>
              <div class="col-6 d-grid">
                <button type="button" class="btn btn-outline-primary fw-bold" onclick="admin_add_inspector();">Add</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ===============================add inspector================================================ -->

    <!-- ================================add admin=============================================== -->

    <div class="modal fade " id="add_admin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <div class="modal-header">
            <h1 class="text-center fw-bold text-uppercase fs-2" id="staticBackdropLabel">Add Admin</h1>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12 ">
                <div class="row">
                  <div class="col-12 ">
                    <label class="form-label"><span class="text-danger">*</span>User Name</label><br>
                    <small id="admin_add_admin_uname_sm" class="small text-danger d-block"></small>
                    <input type="text" class="form-control" placeholder="Type User Name" id="admin_add_admin_uname">
                  </div>
                  <div class="col-12 ">
                    <label class="form-label"><span class="text-danger">*</span>Name</label><br>
                    <small id="admin_add_admin_name_sm" class="small text-danger d-block"></small>
                    <input type="text" class="form-control" placeholder="Type Name" id="admin_add_admin_name">
                  </div>
                  <div class="col-12 ">
                    <label class="form-label"><span class="text-danger">*</span>NIC</label><br>
                    <small id="admin_add_admin_nic_sm" class="small text-danger d-block"></small>
                    <input type="text" class="form-control" placeholder="Type NIC" id="admin_add_admin_nic">
                  </div>
                  <div class="col-12 ">
                    <label class="form-label"><span class="text-danger">*</span>Gender</label><br>
                    <small id="admin_add_admin_gender_sm" class="small text-danger d-block"></small>
                    <select class="form-select" id="admin_add_admin_gender">
                      <option value="x">Select gender</option>
                      <option value="1">Male</option>
                      <option value="2">Female</option>
                    </select>
                  </div>
                  <div class="col-12 ">
                    <label class="form-label"><span class="text-danger">*</span>Admin type</label><br>
                    <small id="admin_add_admin_adtype_sm" class="small text-danger d-block"></small>
                    <select class="form-select" id="admin_add_admin_adtype">
                      <option value="x">Select Admin type</option>
                      <option value="1">Super admin</option>
                      <option value="2">Admin</option>
                    </select>
                  </div>
                  <div class="col-12 ">
                    <label class="form-label"><span class="text-danger">*</span>Password</label><br>
                    <small id="admin_add_admin_password_sm" class="small text-danger d-block"></small>
                    <input type="text" class="form-control" placeholder="Type Password" id="admin_add_admin_password">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <div class="row w-100">
                <p class="fs-4 text-danger text-center" id="admin_add_admin_main"></p>
                <div class="col-6 d-grid">
                  <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal" onclick="">Close</button>
                </div>
                <div class="col-6 d-grid">
                  <button type="button" class="btn btn-outline-primary fw-bold" onclick="admin_add_admin();">Add</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ===============================add admin================================================ -->


      <!-- ============================================================== -->
      <!-- MODALS -->
      <!-- ============================================================== -->

      <!-- =================================================================== -->
      <!-- Pagination -->
      <!-- =================================================================== -->
      <script src="pagination.js"></script>
      <!-- =================================================================== -->
      <!-- Pagination -->
      <!-- =================================================================== -->

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
  </body>

  </html>

<?php
} else {
  header("Location: index.php");
}
