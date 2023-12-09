<?php
include 'db_connect.php';

$dateFilter = $_GET['dateFilter'];

switch ($dateFilter) {
    case 'today':
        $sql = "SELECT * FROM ultrasonic_data WHERE DATE(timestamp) = CURDATE()";
        break;
    case 'yesterday':
        $sql = "SELECT * FROM ultrasonic_data WHERE DATE(timestamp) = CURDATE() - INTERVAL 1 DAY";
        break;
    case 'last_week':
        $sql = "SELECT * FROM ultrasonic_data WHERE timestamp >= NOW() - INTERVAL 1 WEEK";
        break;
    case 'this_month':
        $sql = "SELECT * FROM ultrasonic_data WHERE MONTH(timestamp) = MONTH(NOW())";
        break;
    case 'last_month':
        $sql = "SELECT * FROM ultrasonic_data WHERE MONTH(timestamp) = MONTH(NOW()) - 1";
        break;
    case 'last_30_minutes':
        $sql = "SELECT * FROM ultrasonic_data WHERE timestamp >= NOW() - INTERVAL 30 MINUTE";
        break;
    default:
        $sql = "SELECT * FROM ultrasonic_data";
}

$result = $conn->query($sql);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>
