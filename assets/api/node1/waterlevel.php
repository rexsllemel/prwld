<?php
require 'http://localhost/pulangui/assets/db_connect.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "waterlevel";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM node_one ORDER BY id DESC LIMIT 1";
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
