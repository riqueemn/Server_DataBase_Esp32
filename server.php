<?php
$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "sensor_data"; 

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) { 
	die("Connection failed: " . mysqli_connect_error()); 
} 

echo "Database connection is OK<br>"; 

if(isset($_POST["temperatura"])) {

	$t = $_POST["temperatura"];

	$sql = "INSERT INTO sensores (temperatura) VALUES (".$t.")"; 

	if (mysqli_query($conn, $sql)) { 
		echo "\nNew record created successfully"; 
	} else { 
		echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
	}
}
?>