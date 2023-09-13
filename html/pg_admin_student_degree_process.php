<?php
require 'connection.php';
require 'pagination.php';

$pg;
$js_function_name = "pg_admin_student_degree";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}

$rows = 10;
$offset = 1 + ($pg - 1) * $rows;

$urs = Database::search("SELECT DISTINCT(degree.degree_name) FROM student 
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_GET["uni"] . "' AND YEAR(student.reg_date)='" . $_GET["yr"] . "'
ORDER BY degree.deg_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
$un = $urs->num_rows;

$urs2 = Database::search("SELECT DISTINCT(degree.degree_name) FROM student 
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
WHERE university.uni_id='" . $_GET["uni"] . "' AND YEAR(student.reg_date)='" . $_GET["yr"] . "';");
$un2 = $urs2->num_rows;

$pagination = Pagination::pg($rows, $un2, $js_function_name);

for ($i = 0; $i < $un; $i++) {
    $tbd = $urs->fetch_assoc();
?>
    <tr onclick="stmfield('<?= $_GET['uni']; ?>','<?= $tbd['degree_name']; ?>','<?= $_GET['yr']; ?>');" class="table-success" >
        <td><?= $offset + $i; ?></td>
        <td><?= $tbd["degree_name"]; ?></td>
    </tr>
<?php
}
?>

<tr>
    <td colspan="9999"><?= $pagination; ?></td>
</tr>