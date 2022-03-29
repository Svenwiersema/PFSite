<?php

$url = "../contact.php";

$name = $_POST["firstname"];
$lName = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];

if($name == null || $name == "") {
    $nameErr = true;
} else {
    $nameErr = false;
}
if($lName == null || $lName == "") {
    $lNameErr = true;
} else {
    $lNameErr = false;
}



if($nameErr || $lNameErr) {
    $_POST["nameErr"] = $nameErr;
    $_POST["lNameErr"]= $lNameErr;

    header("Location: $url");
}

?>