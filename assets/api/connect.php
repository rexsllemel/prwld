
<?php

$dbname = 'waterlevel';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$node1 = $_GET["node1"];
$node2 = $_GET["node2"];

$queryForNode1 = "INSERT INTO ultrasonic_data (node1) VALUES ('$node1')";
$queryForNode2 = "INSERT INTO ultrasonic_data (node2) VALUES ('$node2')";

$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";



?>

<html>
<body>

</body>
</html>