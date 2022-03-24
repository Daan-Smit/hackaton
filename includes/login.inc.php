<?php
//Plaats hier de login form handling

if(isset($_POST["inlog-submit"])){
    $email = $_POST["gebruiker_mail"];
    $wachtwoord = $_POST["gebruiker_wachtwoord"];

    /////////////////////////////////////////////////
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $wachtwoord) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $email, $wachtwoord);
}else{
    header("location: ../login.php");
    exit();
}