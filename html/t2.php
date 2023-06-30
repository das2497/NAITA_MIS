<?php

$c = new mysqli("localhost", "root", "Dds1234@56A$", "world", "3306");
$q = "SELECT * FROM country;";
$d = $c->query($q);

?>
<link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
<!-- Custom CSS -->
<link href="../dist/css/style.min.css" rel="stylesheet" />
<div class="table-responsive">
    <table id="zero_config" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>

            <?php

            while ($x = $d->fetch_assoc()) {
            ?>

                <tr>
                    <td><?= $x['Code']; ?></td>
                    <td><?= $x['Name']; ?></td>
                </tr>

            <?php
            }

            ?>

        </tbody>
    </table>
</div>

<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../dist/js/custom.min.js"></script>
<!-- this page js -->
<script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="../assets/extra-libs/DataTables/datatables.min.js"></script>

<script>
    $("#zero_config").DataTable();
</script>