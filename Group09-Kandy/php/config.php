<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasebase="crud";
// Create connection
$conn = new mysqli($servername, $username, $password, $databasebase);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else
{
	echo "Connected successfully";
}
?>
