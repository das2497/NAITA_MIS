<?php

require "connection.php";
session_start();

$x = $_POST["x"];

$rs = Database::search("SELECT *
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
INNER JOIN gender ON student.gender_gn_id=gender.gn_id
INNER JOIN gov_status ON university.gov_status_govstat_id=gov_status.govstat_id
WHERE student.st_id='" . $_POST["x"] . "';");

$det = $rs->fetch_assoc();

?>

<div class="row ">

    <div class="col-12 border-right">
        <div class="p-3 py-5 ">
            <div class="row mt-3">
                <div class="col-12 mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-8 d-grid col-12 border-bottom mb-3">
                                    <button class="btn btn-outline-primary fw-bold shadow m-2" data-bs-toggle="modal" data-bs-target="#training_establishment_details">Training Establishment Details</button>
                                </div>
                                <?php
                                // if ($det["naita_id"] != "") {
                                ?>
                                <!-- <div class="col-lg-8 d-grid col-12 border-bottom mb-3">                                    
                                        <button class="btn btn-outline-primary fw-bold shadow m-2">Send Training Establishment Registration Email</button>
                                    </div> -->
                                <?php
                                // }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-9 col-12 offset-lg-3 border-bottom mb-3">
                                    <div class="row">


                                        <?php

                                        if ($det["gov_status_govstat_id"] == 1) {
                                        ?>
                                            <div class="col-2">
                                                <input type="checkbox" name="" id="ch1" class="form-check-input " checked disabled>
                                            </div>
                                            <div class="col-8 ">
                                                <label class=" d-inline me-4 fs-5 fw-bold" for="ch1">Government Univercity</label>
                                            </div>
                                            <div class="col-2">
                                                <span class="float-end p-1 rounded alert-warning ">checked</span>
                                                <?php
                                            } else {


                                                if ($det["status"] == 1) {
                                                ?>
                                                    <div class="col-2">
                                                        <input type="checkbox" name="" id="ch1" class="form-check-input " checked disabled>
                                                    </div>
                                                    <div class="col-8 ">
                                                        <label class=" d-inline me-4 fs-5 fw-bold" for="ch1">Paid</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="float-end p-1 rounded alert-success ">checked</span>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <div class="col-2">
                                                            <input type="checkbox" name="" id="ch1" class="form-check-input">
                                                        </div>
                                                        <div class="col-8 ">
                                                            <label class=" d-inline me-4 fs-5 fw-bold" for="ch1">Unpaid</label>
                                                        </div>
                                                        <div class="col-2">
                                                            <span class="float-end p-1 rounded alert-danger">unchecked</span>
                                                    <?php
                                                }
                                            }
                                                    ?>


                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="col-lg-9 col-12 offset-lg-3 border-bottom mb-3">
                                                <div class="row">
                                                    <div class="col-2 ">
                                                        <input type="checkbox" name="" id="ch2" class="form-check-input">
                                                    </div>
                                                    <div class="col-8 ">
                                                        <label class=" d-inline me-4 fs-5 fw-bold" for="ch2">Training Pleacement Seminar</label>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="float-end p-1 rounded alert-danger">none</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12 offset-lg-3 border-bottom mb-3">
                                                <div class="row">
                                                    <div class="col-2 ">
                                                        <input type="checkbox" name="" id="ch3" class="form-check-input">
                                                    </div>
                                                    <div class="col-8 ">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class=" d-inline me-4 fs-5 fw-bold" for="ch3">1st Monitoring</label>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="fw-bold">(Assessor)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="float-end p-1 rounded alert-danger">none</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12 offset-lg-3 border-bottom mb-3">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <input type="checkbox" name="" id="ch4" class="form-check-input">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class=" d-inline me-4 fs-5 fw-bold" for="ch4">2nd Monitoring</label>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="fw-bold">(Assessor)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="float-end p-1 rounded alert-success">checked</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-9 col-12 offset-lg-3 border-bottom mb-3">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <input type="checkbox" name="" id="ch5" class="form-check-input">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <label class=" d-inline me-4 fs-5 fw-bold" for="ch5">3rd Monitoring</label>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="fw-bold">(Assessor)</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2">
                                                        <span class="float-end p-1 rounded alert-success">checked</span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="text-center text-lg-start">Profile Settings</h4>
                                </div>
                                <div class="col-6"><label class="labels">NAITA ID</label>

                                    <?php
                                    if ($det["naita_id"] == "") {
                                    ?>
                                        <input type="text" class="form-control" readonly placeholder="NAITA ID" value="Not Available" <?php
                                                                                                                                        if (isset($_SESSION["SA"])) {
                                                                                                                                        ?>>
                                    <?php
                                                                                                                                        } else {
                                    ?>
                                        >
                                    <?php
                                                                                                                                        }
                                                                                                                                    } else {

                                    ?>

                                    <input type="text" class="form-control" readonly placeholder="NAITA ID" <?php
                                                                                                                                        if (isset($_SESSION["SA"])) {
                                                                                                            ?> value=" <?php echo $det["naita_id"]; ?>">
                                <?php
                                                                                                                                        } else {
                                ?>
                                    value=" <?php echo $det["naita_id"]; ?>" >
                            <?php
                                                                                                                                        }
                                                                                                                                    }

                            ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6"><label class="labels">First Name</label>
                            <input id="st_prof_first_name" type="text" class="form-control" placeholder="First Name" <?php
                                                                                                                        if (isset($_SESSION["SA"])) {
                                                                                                                        ?> value=" <?php echo $det["first_name"]; ?>">
                        <?php
                                                                                                                        } else {
                        ?>
                            value=" <?php echo $det["first_name"]; ?>">
                        <?php
                                                                                                                        }

                        ?>
                        </div>
                        <div class="col-12 col-lg-6"><label class="labels">Last Name</label>
                            <input type="text" id="st_prof_last_name" class="form-control" placeholder="Last Name" <?php
                                                                                                                    if (isset($_SESSION["SA"])) {
                                                                                                                    ?> value="<?php echo $det["last_name"]; ?>">
                        <?php
                                                                                                                    } else {
                        ?>
                            value="<?php echo $det["last_name"]; ?>" readonly>
                        <?php
                                                                                                                    }

                        ?>
                        </div>
                        <div class="col-12 "><label class="labels">Full Name With initials</label>
                            <input type="text" id="st_prof_full_name_with_init" class="form-control" placeholder="Full Name With initials" <?php
                                                                                                                                            if (isset($_SESSION["SA"])) {
                                                                                                                                            ?> value="<?php echo $det["full_name_with_init"]; ?>">
                        <?php
                                                                                                                                            } else {
                        ?>
                            value="<?php echo $det["full_name_with_init"]; ?>" readonly>
                        <?php
                                                                                                                                            }

                        ?>
                        </div>
                        <div class="col-12 "><label class="labels">Full Name</label>
                            <input type="text" id="st_prof_full_name" class="form-control" placeholder="Full Name" <?php
                                                                                                                    if (isset($_SESSION["SA"])) {
                                                                                                                    ?> value="<?php echo $det["full_name"]; ?>">
                        <?php
                                                                                                                    } else {
                        ?>
                            value="<?php echo $det["full_name"]; ?>" readonly>
                        <?php
                                                                                                                    }

                        ?>
                        </div>
                        <div class="col-md-12"><label class="labels">Address</label>
                            <input type="text" id="st_prof_address" class="form-control" placeholder="Address" <?php
                                                                                                                if (isset($_SESSION["SA"])) {
                                                                                                                ?> value="<?php echo $det["address"]; ?>">
                        <?php
                                                                                                                } else {
                        ?>
                            value="<?php echo $det["address"]; ?>" readonly>
                        <?php
                                                                                                                }

                        ?>

                        </div>
                        <div class="col-12 col-md-6"><label class="labels">Gender</label>
                            <input type="text" id="st_prof_gender" class="form-control" readonly placeholder="Gender" <?php
                                                                                                                        if (isset($_SESSION["SA"])) {
                                                                                                                        ?> value="<?php echo $det["gender_type"]; ?>">
                        <?php
                                                                                                                        } else {
                        ?>
                            value="<?php echo $det["gender_type"]; ?>" readonly>
                        <?php
                                                                                                                        }

                        ?>

                        </div>
                        <div class="col-12 col-md-6"><label class="labels">N.I.C. No</label>
                            <input type="text" id="st_prof_nic" class="form-control" placeholder="N.I.C. No" <?php
                                                                                                                if (isset($_SESSION["SA"])) {
                                                                                                                ?> value="<?php echo $det["nic"]; ?>">
                        <?php
                                                                                                                } else {
                        ?>
                            value="<?php echo $det["nic"]; ?>" readonly>
                        <?php
                                                                                                                }

                        ?>

                        </div>
                        <div class="col-12 col-md-6"><label class="labels">Mobile No</label>
                            <input type="text" id="st_prof_mobile" class="form-control" placeholder="Mobile No" <?php
                                                                                                                if (isset($_SESSION["SA"])) {
                                                                                                                ?> value="<?php echo $det["mobile_no"]; ?>">
                        <?php
                                                                                                                } else {
                        ?>
                            value="<?php echo $det["mobile_no"]; ?>" readonly>
                        <?php
                                                                                                                }

                        ?>

                        </div>
                        <div class="col-12 col-md-6"><label class="labels">Land Line No</label>
                            <input type="text" id="st_prof_land" class="form-control" placeholder="Land Line No" <?php
                                                                                                                    if (isset($_SESSION["SA"])) {
                                                                                                                    ?> value="<?php echo $det["land_line"]; ?>">
                        <?php
                                                                                                                    } else {
                        ?>
                            value="<?php echo $det["land_line"]; ?>" readonly>
                        <?php
                                                                                                                    }

                        ?>

                        </div>
                        <div class="col-12 col-md-6"><label class="labels">Email Address</label>
                            <input type="text" id="st_prof_email" class="form-control" placeholder="Email Address" <?php
                                                                                                                    if (isset($_SESSION["SA"])) {
                                                                                                                    ?> value="<?php echo $det["email"]; ?>">
                        <?php
                                                                                                                    } else {
                        ?>
                            value="<?php echo $det["email"]; ?>" readonly>
                        <?php
                                                                                                                    }

                        ?>

                        </div>
                        <div class="col-12 col-md-6"><label class="labels">Password</label>
                            <input type="text" id="st_prof_password" class="form-control" placeholder="Password" <?php
                                                                                                                    if (isset($_SESSION["SA"])) {
                                                                                                                    ?> value="<?php echo $det["password"]; ?>">
                        <?php
                                                                                                                    } else {
                        ?>
                            value="<?php echo $det["password"]; ?>" readonly>
                        <?php
                                                                                                                    }

                        ?>

                        </div>
                        <div class="col-12"><label class="labels">Univercity Or Institute</label>
                            <?php
                            if (isset($_SESSION["SA"])) {

                                $rs2 = Database::search("SELECT * FROM university;");
                                $n = $rs2->num_rows;
                            ?>
                                <select class="form-select" id="st_prof_university" disabled>
                                    <option value="x">Select Your Univercity</option>
                                    <?php
                                    for ($i = 0; $i < $n; $i++) {
                                        $university = $rs2->fetch_assoc();

                                        if ($university["uni_id"] == $det["uni_id"]) {
                                    ?>
                                            <option value="<?php echo $university["uni_id"]; ?>" selected><?php echo $university["uni_name"]; ?></option>
                                        <?php
                                        } else {

                                        ?>
                                            <option value="<?php echo $university["uni_id"]; ?>"><?php echo $university["uni_name"]; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>

                                </select>

                            <?php
                            } else {
                            ?>
                                <input type="text" class="form-control" placeholder="Univercity Or Institute" value="<?php echo $det["uni_name"]; ?>" readonly>
                            <?php
                            }

                            ?>

                        </div>
                        <div class="col-12"><label class="labels">Relevant Field</label>
                            <?php
                            if (isset($_SESSION["SA"])) {

                                $rs2 = Database::search("SELECT * FROM field;");
                                $n = $rs2->num_rows;
                            ?>
                                <select class="form-select" id="st_prof_field" disabled>
                                    <option value="x">Select your Relevent Field</option>
                                    <?php
                                    for ($i = 0; $i < $n; $i++) {
                                        $fields = $rs2->fetch_assoc();

                                        if ($fields["fld_id"] == $det["fld_id"]) {
                                    ?>
                                            <option value="<?php echo $fields["fld_id"]; ?>" selected><?php echo $fields["fld_name"]; ?></option>
                                        <?php
                                        } else {

                                        ?>
                                            <option value="<?php echo $fields["fld_id"]; ?>"><?php echo $fields["fld_name"]; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>

                                </select>

                            <?php
                            } else {
                            ?>
                                <input type="text" class="form-control" placeholder="Relevant Field" value="<?php echo $det["fld_name"]; ?>" readonly>
                            <?php
                            }

                            ?>

                        </div>
                        <div class="col-12 ">
                            <label class="labels">your Degree / Diploma / NVQ</label>
                            <?php

                            if (isset($_SESSION["SA"])) {

                                $rs2 = Database::search("SELECT * FROM degree;");
                                $n = $rs2->num_rows;
                            ?>
                                <select class="form-select" id="st_prof_degree" disabled>
                                    <option value="x">Select your Degree / Diploma / NVQ</option>
                                    <?php
                                    for ($i = 0; $i < $n; $i++) {
                                        $degree = $rs2->fetch_assoc();

                                        if ($degree["deg_id"] == $det["deg_id"]) {
                                    ?>
                                            <option value="<?php echo $degree["deg_id"]; ?>" selected><?php echo $degree["degree_name"]; ?></option>
                                        <?php
                                        } else {


                                        ?>
                                            <option value="<?php echo $degree["deg_id"]; ?>"><?php echo $degree["degree_name"]; ?></option>
                                    <?php
                                        }
                                    }
                                    ?>

                                </select> <?php

                                            ?>
                            <?php
                            } else {
                            ?>
                                <input type="text" class="form-control" placeholder="Relevant Field" value="<?php echo $det["degree_name"]; ?>" readonly>
                            <?php
                            }

                            ?>

                        </div>
                        <div class="col-12">
                            <p class="fs-4 text-danger text-center" id="st_prof_main"></p>
                        </div>
                        <div class="col-12 text-center">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-6 d-grid ">
                                    <button class="btn btn-outline-primary shadow fw-bold" type="button" onclick="st_prof_update_admin('<?php echo $x; ?>');">Update Profile</button>
                                </div>
                                <div class="col-12 col-lg-6 d-grid mt-2 mt-lg-0">
                                    <button class="btn btn-outline-danger shadow fw-bold" <?php
                                                                                            if (isset($_SESSION["SA"]) || isset($_SESSION["AD"])) {
                                                                                            ?> onclick="std_Back_to_select_admin();" <?php
                                                                                                                                    } elseif (isset($_SESSION['Uni'])) {
                                                                                                                                        ?> onclick="std_Back_to_select_uni();" <?php
                                                                                                                                                                            }
                                                                                                                                                                                ?>>Go Back</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ================ training establishment details ========================================== -->

        <div class="modal fade " id="training_establishment_details" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <small class="text-success fw-bold fs-4 text-center mt-2" id="admnaddegalrt"></small>
                    <div class="modal-header">
                        <h1 class="text-center text-uppercase fw-bold fs-4">Student Training Establishment Details</h1>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <?php

                            $rste = Database::search("SELECT * FROM training_establishment WHERE tran_est_st_id='" . $det["st_id"] . "';");

                            if ($rste->num_rows == 0) {
                            ?>
                                <div class="col-12">
                                <p class="fs-4 text-danger text-center">This student is not yet registered for training</p>
                                </div>
                            <?php
                            } else {
                            ?>
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th>start date</th>
                                            <th>end date</th>
                                            <th>efective date</th>
                                            <th>worksite</th>
                                            <th>training period</th>
                                            <th>Monitoring state</th>
                                            <th>training coordinator</th>
                                            <th>coordinator position</th>
                                            <th>coordinator contact</th>
                                        </thead>
                                    </table>
                                </div>
                            <?php
                            }


                            ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row w-100">
                            <div class="col-12 d-grid">
                                <button type="button" class="btn btn-outline-danger fw-bold" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ================ training establishment details ========================================== -->