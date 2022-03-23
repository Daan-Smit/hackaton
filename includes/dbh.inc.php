<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "leergeld";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connectie gefaaled: " . mysqli_connect_error());
}