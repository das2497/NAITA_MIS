<!-- Custom CSS -->
 <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
 <!-- Custom CSS -->
 <link rel="stylesheet" type="text/css" href="../assets/extra-libs/multicheck/multicheck.css" />
 <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
 <link href="../dist/css/style.min.css" rel="stylesheet" />

<table class="table table-striped shadow">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">University Type</th>
            <th scope="col">University Name</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require 'test_con.php';
        require 'test22.php';
        if (isset($_GET['pg'])) {
            $pg = $_GET['pg'];
        } else {
            $pg = 1;
        }
        $rows = 8;
        $ofset = 1 + ($pg - 1) * $rows;
        $urs = Database::search("SELECT * FROM city ORDER BY ID ASC 
                    LIMIT $rows OFFSET " . ($ofset - 1) . ";");
        $un = $urs->num_rows;
        $urs2 = Database::search("SELECT * FROM city;");
        $un2 = $urs2->num_rows;
        $pg = Pagination::pg($rows, $un2, "test_pg_load.php");
        for ($i = 0; $i < $un; $i++) {
            $ursr = $urs->fetch_assoc();
        ?>
            <tr class="table-primary">
                <td><?= $ursr["ID"]; ?></td>
                <td><?= $ursr["CName"]; ?></td>
                <td><?= $ursr["CountryCode"]; ?></td>
            </tr>
        <?php

        }
        ?>
        <tr>
            <td colspan="3"><?= $pg; ?></td>
        </tr>
    </tbody>
</table>
<?php
echo $un2;
?>
<script>
    function Pagination(pg, file_name) {
        console.log(pg);
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4) {
                // console.log(r.responseText);
                // location.reload();
            }
        }
        r.open("GET", file_name + "?pg=" + pg, true);
        r.send();
    }
</script>