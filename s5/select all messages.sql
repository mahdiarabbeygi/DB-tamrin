<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbproject3";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query1 = "SELECT id, message, created_time, upload_time FROM messages";
$result1 = $conn->query($query1);
$allMessages = $result1->fetch_all(MYSQLI_ASSOC);

$conn->close();

?>