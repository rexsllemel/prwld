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

$sql = "SELECT * FROM ultrasonic_data ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the latest row
    $row = $result->fetch_assoc();
    var_dump($row); // Debug statement
    $distance = $row["node1"];
    echo "Distance: " . $distance;
} else {
    echo "0 results";
}

$conn->close();
?>
