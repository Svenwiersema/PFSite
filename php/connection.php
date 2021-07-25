<?php 

$server = "localhost";
$db = "dbs2936143";
$gn = "dbu1564428";
$ww = "Sw0652887123";

// Create connection
$conn = new mysqli($server, $gn, $ww, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

 ?>