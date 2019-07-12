<?php
 // print_r($_GET);
// echo 'hello'.$_GET['fname'];


$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "phpdb";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	// eror     $sumbit = INSERT INTO `users`(`id`, `name`, `email`, `pass`) VALUES (null,['wqr'],[waqar@gmail.com],['abc123'])
    echo "Database created successfully: $submit";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
  ?>