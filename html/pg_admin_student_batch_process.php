<?php
require 'connection.php';
require 'pagination.php';

$pg;
$js_function_name = "pg_admin_student_batch";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}

$rows = 10;
$offset = 1 + ($pg - 1) * $rows;

$urs = Database::search("SELECT DISTINCT(YEAR(reg_date)) AS YEAR
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_GET["uniID"] . "'
ORDER BY student.st_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
$un = $urs->num_rows;

$urs2 = Database::search("SELECT DISTINCT(YEAR(reg_date)) AS YEAR
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_GET["uniID"] . "';");
$un2 = $urs2->num_rows;

$pagination = Pagination::pg($rows, $un2, $js_function_name);

for ($i = 0; $i < $un; $i++) {
    $ursr = $urs->fetch_assoc();
?>
    <tr class="table-warning" onclick="stmdegrr('<?= $ursr['YEAR']; ?>','<?= $_GET['uniID']; ?>');">
        <td><?= $offset + $i; ?></td>
        <td><?= $ursr["YEAR"]; ?></td>
    </tr>
<?php
}
?>

<tr>
    <td colspan="9999"><?= $pagination; ?></td>
</tr>

