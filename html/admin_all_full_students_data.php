<?php
require 'connection.php';
require 'pagination.php';

$pg;
$js_function_name = "pg_admin_all_full_students_data";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}



if (!isset($_POST["admin_all_full_students_data_search"])) {
    $_POST["admin_all_full_students_data_search"] = "";
}

$query = "SELECT *
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
INNER JOIN gender ON student.gender_gn_id=gender.gn_id";

switch ($_POST["admin_all_full_students_data_search"]) {
    case "":

        break;

    default:
        $query .= " WHERE 
        student.naita_id LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR 
        student.full_name_with_init LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR 
        student.nic LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR 
        student.email LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR
        university.uni_name LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR 
        university.uni_email LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR 
        degree.degree_name LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR 
        field.fld_name LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%' OR 
        YEAR(student.reg_date) LIKE '%" . $_POST["admin_all_full_students_data_search"] . "%'";
        break;
}

$rows = 10;
$offset = 1 + ($pg - 1) * $rows;

// echo $query . ';';

$urs = Database::search($query . " ORDER BY student.st_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
$un = $urs->num_rows;

$urs2 = Database::search($query . ";");
$un2 = $urs2->num_rows;

$pagination = Pagination::pg($rows, $un2, $js_function_name);

for ($i = 0; $i < $un; $i++) {
    $tbd = $urs->fetch_assoc();
?>
    <tr class="table-primary">
        <td style="white-space: nowrap;"><?= $offset + $i; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["naita_id"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["first_name"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["last_name"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["full_name_with_init"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["nic"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["gender_type"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["email"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["mobile_no"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["land_line"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["address"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["uni_name"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["degree_name"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["fld_name"]; ?></td>
        <td style="white-space: nowrap;"><?= $tbd["reg_date"]; ?></td>
    </tr>
<?php
}
?>

<tr>
    <td colspan="9999"><?= $pagination; ?></td>
</tr>