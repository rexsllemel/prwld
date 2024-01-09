
<?php
require '../../../assets/db_connect.php';

$connect = @mysqli_connect($host, $username, $password, $database);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$waterlevel = $_GET["node2"];

$query = "INSERT INTO node_two (distance) VALUES ('$waterlevel')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";



?>

<html>
<body>

</body>
</html>