<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "waterlevel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM node_two ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the latest row
    $row = $result->fetch_assoc();
    $distance = $row["distance"];
    echo $distance;
} else {
    echo "0 results";
}

$conn->close();
?>
