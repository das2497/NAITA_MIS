<?php

require 'connection.php';

//echo $_GET["insid"] . " " . $_GET["mtype"] . "\n";

if ($_GET['mtype'] == "0") {
?>
    <table class=" table table-responsive table-striped shadow ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Monitored Date</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-success">
                <td colspan="4">
                    <h4 class="text-center">Pleace Select Monitored Phase</h4>
                </td>
            </tr>
        </tbody>
    </table>
    <?php
} else {



    $query = "SELECT *
    FROM " . $_GET['mtype'] . "
    INNER JOIN inspector ON " . $_GET['mtype'] . ".mn_ins_id=inspector.ins_id
    INNER JOIN student ON " . $_GET['mtype'] . ".student_st_id=student.st_id
    WHERE " . $_GET['mtype'] . ".mn_ins_id='" . $_GET["insid"] . "' AND " . $_GET['mtype'] . ".super_stat='0';";

    $rs = Database::search($query);
    $rsn = $rs->num_rows;

    // echo $query;

    if ($rsn > 0) {

    ?>

        <table class=" table table-responsive table-striped shadow ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Monitored Date</th>
                    <th scope="col">Monitored Phase</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for ($i = 0; $i < $rsn; $i++) {
                    $rsd = $rs->fetch_assoc();

                ?>
                    <tr id="<?= $i; ?>" class="table-success">
                        <td><?= $i; ?></td>
                        <td><?= $rsd["first_name"]; ?></td>
                        <td><?= $rsd["mn_date"]; ?></td>
                        <td><?= $_GET['mtype']; ?></td>
                    </tr>

                <?php

                }

                ?>

            </tbody>
        </table>

    <?php


    } else {

    ?>

        <table class=" table table-responsive table-striped shadow ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Monitored Date</th>
                    <th scope="col">Monitored Phase</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-success">
                    <td colspan="4">
                        <span class="text-center">All <?php echo $_GET["mtype"] ?> monitored Students are Checked.</span>
                    </td>
                </tr>
            </tbody>
        </table>

<?php

    }
}
