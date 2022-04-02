<?php 

$server = "";
$db = "";
$gn = "";
$ww = "";

// Create connection
$conn = new mysqli($server, $gn, $ww, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

 ?>