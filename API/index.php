<?php
require_once '../db/db.php';
$conn = $GLOBALS['conn'];
$query = "select * from User";
$dbRows = $conn->query($query);
$response = array();
while ($row = $dbRows->fetch_assoc()) {
    array_push($response, $row);
}

echo json_encode($response);
