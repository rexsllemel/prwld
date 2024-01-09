<?php
$host = "localhost";
$username = "root";
$password = "";
$passwordlocal = "admin@aclc";
$database = "waterlevel";

$conn = new mysqli($host, $username, $password, $database);
$connLocal = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
