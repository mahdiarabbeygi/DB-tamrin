<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "dbproject";
$connection = new mysqli($servername, $username, $password, $database_name);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

function addStudent($connection, $email, $password, $first_name, $last_name, $bio, $current_academic_year)
{
    $query = "INSERT INTO tbl_student (email, password, first_name, last_name, bio, current_academic_year) VALUES (?, ?, ?, ?, ?, ?)";

    $statement = $connection->prepare($query);
    $statement->bind_param("ssssss", $email, $password, $first_name, $last_name, $bio, $current_academic_year);

    if ($statement->execute()) {
        echo "Student added ";
    } else {
        echo "Error: " . $statement->error;
    }

    $statement->close();
}

function addLesson($connection, $name)
{
    $query = "INSERT INTO tbl_lesson (name) VALUES (?)";

    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        echo "Lesson added ";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

function editStudent($connection, $student_id, $first_name, $last_name, $bio, $current_academic_year)
{
    $query = "UPDATE tbl_student SET first_name = ?, last_name = ?, bio = ?, current_academic_year = ? WHERE student_id = ?";

    $stmt = $connection->prepare($query);
    $stmt->bind_param("ssssi", $first_name, $last_name, $bio, $current_academic_year, $student_id);

    if ($stmt->execute()) {
        echo "Student information updated.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

function softDeleteStudent($connection, $student_id)
{
    $query = "UPDATE tbl_student SET is_deleted = 1 WHERE student_id = ?";

    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $student_id);

    if ($stmt->execute()) {
        echo "Student soft-deleted ";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

function softDeleteLesson($connection, $lesson_id)
{
    $query = "UPDATE tbl_lesson SET is_deleted = 1 WHERE lesson_id = ?";

    $stmt = $connection->prepare($query);
    $stmt->bind_param("i", $lesson_id);

    if ($stmt->execute()) {
        echo "Student soft-deleted";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$connection->close();

