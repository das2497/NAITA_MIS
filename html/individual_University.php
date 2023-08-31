<?php

require "connection.php";

$x = $_POST["uni_id"];

$con = Database::search("SELECT * FROM university 
INNER JOIN uni_type ON university.uni_type_uni_typ_id=uni_type.uni_typ_id
WHERE uni_id='" . $x . "';");

$U = $con->fetch_assoc();

?>

<div class="row">
    <div class="col-12 ">
        <div>

            <div class="row mt-3 ">
                <div class="col-md-12 p-4">
                    <h4 class="text-center text-uppercase">Profile Settings</h4>
                </div>
                <div class="col-md-12 p-2">
                    <div class="row">
                        <?php

                        $email = $U['uni_email']

                        ?>
                        <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-outline-primary fw-bold shadow" onclick="send_student_registration_email('<?= $email; ?>');">Send Student Registration By Email</button>
                        </div>
                        <div class="col-12 col-lg-6 d-grid">
                            <button class="btn btn-outline-primary fw-bold shadow" onclick="send_training_establishment_email('<?= $_POST['uni_id']; ?>');">Send Training Establishment Registration By Email for all registered students</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-12"><label class="labels"><?php echo $U["uni_typ"]; ?></label>
                    <input type="text" class="form-control" placeholder="<?php echo $U["uni_typ"]; ?> Name" value="<?php echo $U["uni_name"]; ?>">
                </div>
                <div class="col-12 col-md-6"><label class="labels">contact no 1</label>
                    <input type="text" class="form-control" placeholder="contact no 1" value="<?php echo $U["uni_contact_1"]; ?>">
                </div>
                <div class="col-12 col-md-6"><label class="labels">contact_no_2</label>
                    <input type="text" class="form-control" placeholder="contact no 2" value="<?php echo $U["uni_contact_2"]; ?>">
                </div>
                <div class="col-12 col-md-6"><label class="labels">Email Address of the <?php echo $U["uni_typ"]; ?></label>
                    <input type="text" class="form-control" placeholder="Email Address of the <?php echo $U["uni_typ"]; ?>" value="<?php echo $U["uni_email"]; ?>">
                </div>
                <div class="col-12 col-md-6"><label class="labels">Password</label>
                    <input type="text" class="form-control" placeholder="Password" value="<?php echo $U["uni_pass"]; ?>">
                </div>

                <hr class="w-100 border-bottom border-5 mt-4">

                <div class="col-12 my-4">

                    <?php

                    $c = Database::search("SELECT * FROM degree
                    INNER JOIN university ON degree.deg_uni_id=university.uni_id
                    INNER JOIN field ON field.fld_deg_id=degree.deg_id
                    WHERE degree.deg_uni_id='" . $U["uni_id"] . "';");
                    $n2 = $c->num_rows;


                    ?>
                    <div class="table-responsive border border-4">
                        <table class="table table-stripe">
                            <thead>
                                <tr>
                                    <th>
                                        Degree Name
                                    </th>
                                    <th>
                                        Field
                                    </th>
                                </tr>
                            </thead>
                            <tbody>


                                <?php

                                if ($n2 > 0) {


                                    for ($i = 0; $i < $n2; $i++) {
                                        $d2 = $c->fetch_assoc();
                                ?>
                                        <tr>
                                            <td>
                                                <input type="text" value="<?php echo $d2["degree_name"]; ?>" class="w-100 form-control">
                                            </td>
                                            <td>
                                                <input type="text" value="<?php echo $d2["fld_name"]; ?>" class="w-100 form-control">
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td>
                                            <input type="text" value="Degrees Not Registered By <?php echo $U["uni_typ"]; ?>" class="w-100 form-control" readonly>
                                        </td>
                                    </tr>
                                <?php
                                }

                                ?>



                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 d-grid g-2 mt-4 text-center">
                    <div class="row ">
                        <div class="col-12 col-lg-6 d-grid ">
                            <button class="btn btn-outline-primary shadow fw-bold profile-button" type="button" onclick="UNIUpdateProfile2();">Update Profile</button>
                        </div>
                        <div class="col-12 col-lg-6 d-grid ">
                            <button class="btn btn-outline-danger shadow fw-bold mt-2 mt-lg-0" onclick="admin_indi_uni();">Go Back</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>