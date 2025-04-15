<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "kapiyoh_v2";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }else {
//   // echo " Successful";
// }
$serverName = "118.174.1.166";
	$userName = "sa";
	$userPassword = "m0801401513";
	$dbName = "ic";
$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

mysqli_set_charset($conn, "utf8");


// // Check connection
// if ($conn->connect_error) {
// 	die("Connection failed: " . $conn->connect_error);
//   }
//   echo "Connected successfully";






?>