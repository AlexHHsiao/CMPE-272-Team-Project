<?php
//$server = 'us-cdbr-east-02.cleardb.com';
//$username = 'b29064eaa430d7';
//$password = '10702318';
//$db = 'heroku_b9123864f1692c6';

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'heroku_b9123864f1692c6';

$conn = new mysqli($server, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$query = "CREATE TABLE Persons (
//    Email varchar(255),
//    Password varchar(255),
//    Id varchar(255),
//    Username varchar(255),
//    Visited varchar(255),
//    UNIQUE (Email)
//);";
//$conn->query($query) or die($conn->error);

//$query = "INSERT INTO Persons (Email, Password, Username)
//            VALUES ('123', '11', '11');";
// $query = "SELECT * FROM Persons WHERE Email='Doe'";

//if (!$conn->query($query)) {
//    echo("Error description: " . $conn -> error);
//    echo "<script>alert('sfsf');</script>";
//}

//$conn->query($query) or die($conn->error);

// echo password_hash("123123", PASSWORD_DEFAULT);
//echo password_verify('123123', '$2y$10$h1UnKdKgAl9eKffih0ALUOqKSQKkiNcgOgYCEHkmg3Sk/ZURSVJnG');

$GLOBALS['conn'] = $conn;
