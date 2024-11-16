<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "obituary_platform";

// Create connection
$conn = new mysqli("localhost", "root", "", "obituary_platform");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $dod = $_POST['dod'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    $sql = "INSERT INTO obituaries (name, date_of_birth, date_of_death, content, author) VALUES ('$name', '$dob', '$dod', '$content', '$author')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>