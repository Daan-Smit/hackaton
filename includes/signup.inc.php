<?php

//Checkt of de gebruiker op deze pagina gekomen is doordat hij/zij de form gebruikt heeft.
if(isset($_POST['registreer-submit'])){
    require_once "functions.inc.php";
    //mysql connectie
    require_once 'dbh.inc.php';
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    //Neemt een random wachtwoord van 10 karakakters.
    $wachtwoord = generatePassword();
    $userId = generateUserId();
    $userlevel = 1;
    //Checkt of alle vakken zijn ingevuld.
    if (emptyInputSignup($voornaam, $achternaam, $email, $telefoonnummer) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    //Checkt of alle tekst valide is.
    if (invalidUid($voornaam, $achternaam) !== false) {
        header("location: ../signup.php?error=char");
        exit();
    }
    //Checkt je email
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=email");
        exit();
    }
    //Checkt je telefoonnr
    if (invalidTel($telefoonnummer) !== false) {
        header("location: ../signup.php?error=telefoon");
        exit();
    }
    if (checkMail($conn, $email) !== false) {
        header("location: ../signup.php?error=emailInUse");
        exit();
    }
    //Check of je random gegenereerde klant id al niet toevallig bestaat
    if (checkIdE($conn, $userId) !== false) {
        //Wanneer de gebruikers id al bestaat dan genereer je een nieuwe tot dat hij nieuw is.
        do{
            $userId = generateUserId();
        }while(checkIdE($conn, $userId) !== false);
    }
    //Hier maak je daadwerkelijk je gebruiker aan.
    createUser($conn, $voornaam, $achternaam, $email, $telefoonnummer, $wachtwoord, $userId, $userlevel);

}else{
    //Wanneer de gebruiker hier niet komt via de form dan word je automatisch geredirect en word het script afgebroken.
    header("location: ../signup.php");
    exit();
}