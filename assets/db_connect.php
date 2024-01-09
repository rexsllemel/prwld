<?php
$host = "localhost";
$username = "root";
$password = "";
$passwordlocal = "admin@aclc";
$database = "waterlevel";

$conn = new mysqli($host, $username, $password || $passwordlocal, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
