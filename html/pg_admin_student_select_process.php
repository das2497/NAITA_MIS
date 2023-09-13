<?php
require 'connection.php';
require 'pagination.php';

$pg;
$js_function_name = "pg_admin_student_select";

if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
} else {
    $pg = 1;
}

$rows = 10;
$offset = 1 + ($pg - 1) * $rows;

$urs = Database::search("SELECT *
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
INNER JOIN gender ON student.gender_gn_id=gender.gn_id
WHERE degree.degree_name='" . $_GET['deg'] . "' AND university.uni_id='" . $_GET['uni'] . "' AND YEAR(student.reg_date)='" . $_GET['yr'] . "' AND field.fld_name='" . $_GET['field'] . "'
ORDER BY degree.deg_id ASC LIMIT $rows OFFSET " . ($offset - 1) . ";");
$un = $urs->num_rows;

$urs2 = Database::search("SELECT *
FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
INNER JOIN gender ON student.gender_gn_id=gender.gn_id
WHERE degree.degree_name='" . $_GET['deg'] . "' AND university.uni_id='" . $_GET['uni'] . "' AND YEAR(student.reg_date)='" . $_GET['yr'] . "' AND field.fld_name='" . $_GET['field'] . "';");
$un2 = $urs2->num_rows;

$pagination = Pagination::pg($rows, $un2, $js_function_name);

for ($i = 0; $i < $un; $i++) {
    $tbd = $urs->fetch_assoc();
?>
    <tr class=" <?php if ($tbd["gov_status_govstat_id"] == "1" || $tbd["gov_status_govstat_id"] == "3") {
                ?> alert-info <?php
                            } else {
                                ?> alert-danger <?php
                                            } ?>">
        <td><?= $tbd["st_id"]; ?></td>
        <td>
            <?php if ($tbd["naita_id"] == "") {
            ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter NAITA Id" id="add_nt_id<?= $tbd['nic']; ?>">
                    <button class="btn btn-outline-primary fw-bold input-group-btn shadow" onclick="enter_naita_id('<?= $tbd['nic']; ?>');">Enter</button>
                </div>
            <?php
            } else {
            ?>
                <div class="input-group mb-3">
                    <span><?= $tbd["naita_id"]; ?></span>
                    <!-- <input type="text" class="form-control" placeholder="Enter NAITA Id" id="update_nt_id<?= $tbd['nic']; ?>" value="<?= $tbd["naita_id"]; ?>"> -->
                    <!-- <button class="btn btn-outline-danger fw-bold input-group-btn shadow" onclick="update_naita_id('<?= $tbd['nic']; ?>');">Update</button> -->
                </div>
            <?php
            }  ?>
        </td>
        <td><?= $tbd["full_name_with_init"]; ?></td>
        <td><?= $tbd["nic"]; ?></td>
        <td><?= $tbd["mobile_no"]; ?></td>
        <td><?= $tbd["land_line"]; ?></td>
        <td><?= $tbd["gender_type"]; ?></td>
        <td><?= $tbd["fld_name"]; ?></td>
        <td><?= $tbd["degree_name"]; ?></td>
        <td><?= $tbd["uni_name"]; ?></td>
        <td><?= $tbd["reg_date"]; ?></td>
        <td><button onclick="Student_profile_admin(<?= $tbd['st_id']; ?>);" class="btn btn-outline-primary fw-bold shadow">View Profile</button></td>
    </tr>
<?php
}
?>

<tr>
    <td colspan="9999"><?= $pagination; ?></td>
</tr>