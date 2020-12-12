<?php
$server = 'us-cdbr-east-02.cleardb.com';
$username = 'b29064eaa430d7';
$password = '10702318';
$db = 'heroku_b9123864f1692c6';

//$server = 'localhost';
//$username = 'root';
//$password = '';
//$db = 'heroku_b9123864f1692c6';

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$query = "CREATE TABLE Persons (
//    Email varchar(255),
//    Password varchar(255),
//    Id varchar(255),
//    Username varchar(255),
//    Visited longtext,
//    UNIQUE (Email)
//);";
//$conn->query($query) or die($conn->error);
//
// $query = "CREATE TABLE Reviews (
//    UserId varchar(255),
//    Rate varchar(255),
//    Id varchar(255),
//    Username varchar(255),
//    Comment varchar(255)
// );";
// $conn->query($query) or die($conn->error);

$GLOBALS['conn'] = $conn;
