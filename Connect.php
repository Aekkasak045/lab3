<?php
$servername = "localhost";
$username = "CPE4508";
$password = "260945";
$db_name = "cpe4508";

// Create connection
$conn = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>