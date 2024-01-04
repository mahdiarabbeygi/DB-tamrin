<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbproject2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userId = 12;
$query1 = "SELECT id, name, email FROM user WHERE id = $userId";
$result1 = $conn->query($query1);
$specificUser = $result1->fetch_assoc();

var_dump($specificUser);

$conn->close();

?>