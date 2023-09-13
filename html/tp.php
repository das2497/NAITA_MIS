<?php

require 'connection.php';

$rs = Database::search("SELECT * FROM districts;");

$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
// echo json_encode(array("data" => $data));
