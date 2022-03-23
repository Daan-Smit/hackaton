<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "elstar";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die("Connectie gefaaled: " . mysqli_connect_error());
}