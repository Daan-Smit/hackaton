<?php
//Plaats hier de login form handling

if(isset($_POST["inlog-submit"])){
    $id_mail = $_POST["id_mail"];
    $wachtwoord = $_POST["wachtwoord"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($id_mail, $wachtwoord) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $id_mail, $wachtwoord);
}else{
    header("location: ../login.php");
    exit();
}