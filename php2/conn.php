<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $db = "my_resume_website";

$servername = "localhost";
$username = "id4052147_peter";
$password = "peter";
$db = "id4052147_ver1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully";

$selected = mysqli_select_db($conn,$db) 
  or die("Could not select " . $db);