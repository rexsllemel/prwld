<?php
include('../../pulangui/assets/db_connect.php');

$dateFilter = $_GET['BatangandateFilter'];

switch ($dateFilter) {
    case 'today':
        $sql = "SELECT * FROM node_one WHERE DATE(timestamp) = CURDATE()";
        break;
    case 'yesterday':
        $sql = "SELECT * FROM node_one WHERE DATE(timestamp) = CURDATE() - INTERVAL 1 DAY";
        break;
    case 'last_week':
        $sql = "SELECT * FROM node_one WHERE timestamp >= NOW() - INTERVAL 1 WEEK";
        break;
    case 'this_month':
        $sql = "SELECT * FROM node_one WHERE MONTH(timestamp) = MONTH(NOW())";
        break;
    case 'last_month':
        $sql = "SELECT * FROM node_one WHERE MONTH(timestamp) = MONTH(NOW()) - 1";
        break;
    case 'last_30_minutes':
        $sql = "SELECT * FROM node_one WHERE timestamp >= NOW() - INTERVAL 30 MINUTE";
        break;
    default:
        $sql = "SELECT * FROM node_one";
}

$result = $conn->query($sql);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
