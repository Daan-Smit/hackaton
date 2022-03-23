<?php

//Checkt of de gebruiker op deze pagina gekomen is doordat hij/zij de form gebruikt heeft.
if(isset($_POST['registreer-submit'])){
    require_once "functions.inc.php";
    //mysql connectie
    require_once 'dbh.inc.php';
    $email = $_POST['email'];
    $userlevel = $_POST['userlevel'];

    //Neemt een random wachtwoord van 10 karakakters.
    $wachtwoord = generatePassword();

    //Checkt of alle vakken zijn ingevuld.
    if (emptyInputSignup($email, $userlevel) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    //Checkt of het daadwerkelijk een userlevel kan zijn
    if (invalidUserLevel($userlevel) !== false) {
        header("location: ../signup.php?error=userlevel");
        exit();
    }
    //Checkt je email of het email addres is
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=email");
        exit();
    }
    //Checkt of je email uniek is in de database
    if (checkMail($conn, $email) !== false) {
        header("location: ../signup.php?error=emailInUse");
        exit();
    }

    //Hier maak je daadwerkelijk je gebruiker aan.
    createUser($conn, $email, $wachtwoord, $userlevel);

}else{
    //Wanneer de gebruiker hier niet komt via de form dan word je automatisch geredirect en word het script afgebroken.
    header("location: ../signup.php");
    exit();
}