<?php
include 'assets/db_connect.php';

$dateFilter = $_GET['LumbayaodateFilter'];

switch ($dateFilter) {
    case 'today':
        $sql = "SELECT * FROM node_two WHERE DATE(timestamp) = CURDATE()";
        break;
    case 'yesterday':
        $sql = "SELECT * FROM node_two WHERE DATE(timestamp) = CURDATE() - INTERVAL 1 DAY";
        break;
    case 'last_week':
        $sql = "SELECT * FROM node_two WHERE timestamp >= NOW() - INTERVAL 1 WEEK";
        break;
    case 'this_month':
        $sql = "SELECT * FROM node_two WHERE MONTH(timestamp) = MONTH(NOW())";
        break;
    case 'last_month':
        $sql = "SELECT * FROM node_two WHERE MONTH(timestamp) = MONTH(NOW()) - 1";
        break;
    case 'last_30_minutes':
        $sql = "SELECT * FROM node_two WHERE timestamp >= NOW() - INTERVAL 30 MINUTE";
        break;
    default:
        $sql = "SELECT * FROM node_two";
}

$result = $conn->query($sql);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
