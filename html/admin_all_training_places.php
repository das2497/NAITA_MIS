<?php
require 'connection.php';
require 'pagination.php';

$pg;
$js_function_name = "pg_admin_all_training_places";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}

$rows = 10;
$offset = 1 + ($pg - 1) * $rows;

$query = "SELECT * FROM training_place
INNER JOIN districts ON training_place.districts_district_id=districts.district_id";

$urs = Database::search($query . " ORDER BY training_place.tran_plc_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
$un = $urs->num_rows;

$urs2 = Database::search($query . ";");
$un2 = $urs2->num_rows;

$pagination = Pagination::pg($rows, $un2, $js_function_name);

for ($i = 0; $i < $un; $i++) {
    $ursr = $urs->fetch_assoc();
?>
    <tr class="table-warning">
        <td><?= $offset + $i; ?></td>
        <td><?= $ursr["tran_plc_name"]; ?></td>
        <td><?= $ursr["tran_plc_address"]; ?></td>
        <td><?= $ursr["tran_plc_email"]; ?></td>
        <td><?= $ursr["tran_plc_contact1"]; ?></td>
        <td><?= $ursr["tran_plc_contact2"]; ?></td>
        <td><?= $ursr["district"]; ?></td>
        <td><?= $ursr["tran_coordinator"]; ?></td>
        <td><?= $ursr["tran_coordinator_position"]; ?></td>
    </tr>
<?php
}
?>

<tr>
    <td colspan="9999"><?= $pagination; ?></td>
</tr>