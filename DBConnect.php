<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "inventorytracking";
$port= 3308;

// Create connection

$conn = mysqli_connect($servername, $username, $password,$db,$port);

// Check connection

if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}

//echo "Connected successfully";

?>