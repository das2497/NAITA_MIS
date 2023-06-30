<?php

require 'connection.php';

$query = "SELECT * FROM student 
INNER JOIN gender ON student.Gender_gender_id=gender.gender_id 
INNER JOIN country ON student.Country_country_id=country.country_id 
INNER JOIN `fields` ON student.Fields_field_id=`fields`.field_id 
INNER JOIN degree ON student.Degree_degree_id=degree.degree_id 
INNER JOIN university ON student.University_id=university.university_id";

switch (!empty($_POST["repodtfrom"])) {
    case true:
        switch (!empty($_POST["repodtto"])) {
            case true:
                $query .= " WHERE reg_date BETWEEN '" . $_POST["repodtfrom"] . "' AND '" . $_POST["repodtto"] . "'";
                break;

            default:
                $query .= " WHERE reg_date > '" . $_POST["repodtfrom"] . "'";
                break;
        }
        break;

    default:
        switch (!empty($_POST["repodtto"])) {
            case true:
                $query .= " WHERE reg_date < '" . $_POST["repodtto"] . "'";
                break;

            default:

                break;
        }
        break;
}

 echo $query . ";";

$output = '';

$c2 = Database::search($query . ";");
$n2 = $c2->num_rows;

if (mysqli_num_rows($c2) > 0) {
    $output .= "NAITA Id,Student Id,First name,Last Name,Full Name With Initial,Full Name,N.I.C.,Mobile No,Land Line,Email,Registered Date,Gender,Country,Field,Degree,University\n";

    while ($d = mysqli_fetch_array($c2)) {
        $output .= $d["naita_id"] . "," . $d["student_id"] . "," . $d["first_name"] . "," . $d["last_name"] . "," . $d["full_name_init"] . "," . $d["full_name"] . "," . $d["nic"] . "," . $d["mobile_no"] . "," . $d["land_line"] . "," . $d["email"] . "," . $d["reg_date"] . "," . $d["gender_type"] . "," . $d["country_name"] . "," . $d["field_name"] . "," . $d["degree_name"] . "," . $d["university_name"] . "\n";
    }

    header('Content-Type: application/xls');
    header('Content-Disposition: attachment; filename=download.xls');
    echo $output;
} else {
    echo "<span>No data to export .xls file. </span><button>Go Back</button>";
}
