<!-- <h1 class="text-danger d-lg-none hland text-center">Pleace turn mobile to landskape.</h1>
<h1 class="text-center mt-4">All Students</h1> -->



<?php

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
            <tbody id="pg_admin_student_select">
                
            </tbody>
        </table>

    </div>
    <div class="col-10 offset-1 col-lg-4 offset-lg-8 d-grid mt-4 " style="padding-bottom: 50px;">
        <button class="btn btn-outline-danger fw-bold shadow" onclick="std_Back_to_field();">Go Back</button>
    </div>

</div>