<?php

$servername = "localhost";
$username = "id20403647_username";
$password = "(9NXKtEY|^G*y40I";
$database = "id20403647_database";
//Create a connection

$conn = new mysqli($servername, $username, $password,$database);

//Check the connection status

if($conn->connect_error){
	die("Connection failed: " . $conn ->connect_error);
}

echo "Connecton was successful";

?>