<?php
require 'connection.php';
require 'pagination.php';

$pg;
$js_function_name = "pg_admin_university_university";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}

$rows = 10;
$offset = 1 + ($pg - 1) * $rows;

$urs = Database::search("SELECT *
FROM university
INNER JOIN uni_type ON university.uni_type_uni_typ_id=uni_type.uni_typ_id
INNER JOIN gov_status ON university.gov_status_govstat_id=gov_status.govstat_id
ORDER BY university.uni_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
$un = $urs->num_rows;

$urs2 = Database::search("SELECT *
FROM university
INNER JOIN uni_type ON university.uni_type_uni_typ_id=uni_type.uni_typ_id
INNER JOIN gov_status ON university.gov_status_govstat_id=gov_status.govstat_id;");
$un2 = $urs2->num_rows;

$pagination = Pagination::pg($rows, $un2, $js_function_name);

for ($i = 0; $i < $un; $i++) {
    $ursr = $urs->fetch_assoc();
?>
    <tr class="table-danger" onclick="admin_uni(<?= $ursr['uni_id']; ?>);">
        <td><?= $offset + $i; ?></td>
        <td><?= $ursr["uni_typ"]; ?></td>
        <td><?= $ursr["uni_name"]; ?></td>
        <td><?= $ursr["uni_email"]; ?></td>
        <td><?= $ursr["uni_contact_1"]; ?></td>
        <td><?= $ursr["uni_contact_2"]; ?></td>
        <td><?= $ursr["gov_stat"]; ?></td>
    </tr>
<?php
}
?>

<tr>
    <td colspan="9999"><?= $pagination; ?></td>
</tr>