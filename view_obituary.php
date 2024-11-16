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

$sql = "SELECT * FROM obituaries";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Date of Birth</th><th>Date of Death</th><th>Content</th><th>Author</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["date_of_birth"]."</td><td>".$row["date_of_death"]."</td><td>".$row["content"]."</td><td>".$row["author"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>