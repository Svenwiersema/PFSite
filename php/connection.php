<?php 

$server = "rdbms.strato.de";
$db = "dbs2936143";
$gn = "dbu1564428";
$ww = "Sw0652887123";

// Create connection
$conn = new mysqli($server, $gn, $ww);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

 ?>