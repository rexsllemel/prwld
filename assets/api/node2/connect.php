
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

$waterlevel = $_GET["distance"];

$query = "INSERT INTO node_two (distance) VALUES ('$waterlevel')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";



?>

<html>
<body>

</body>
</html>