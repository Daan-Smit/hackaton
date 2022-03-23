<?php
//Deze functie genereert een random string van 10 karakters. 
//Dit word gebruikt als wachtwoord generator
function generatePassword($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Checkt of wachtwoorden overeen komen.
function pwdMatch($password1, $password2){
    $result = false;
    if($password1 !== $password2){
        $result = true;   
    }else{
        $result = false;
}
return $result;
}

function uidExists($conn, $userId, $email){
    $sql = "SELECT * FROM gebruiker WHERE id = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $userId, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

//Check of er al dezelfde gebruiker email bestaat aan de hand van preparestatement.
function checkMail($conn, $email){
        session_start();
    $sql = "SELECT * FROM gebruiker WHERE gebruikermail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

//We maken een user aan, aan de hand van prepare statements.
function createUser($conn, $email, $wachtwoord, $userlevel){
    session_start();
    $sql = "INSERT INTO gebruiker (gebruikermail, gebruikerpass, gebruikeruserlevel) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../signup.php?error=stmtfailed");
    exit();
    }
    //Hier hashen we het wachtwoord voor de veiligheid.
    $hashedWachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssi", $email, $wachtwoord, $userlevel);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    $_SESSION['wachtwoord'] = $wachtwoord;
    $_SESSION['usermail'] = $email;
    header("location: ../signup.php?error=none");
    exit();
}

//Checkt of alle vakken zijn ingevult
function emptyInputSignup($email, $userlevel){
$result = false;
if(empty($email) || empty($userlevel) ){
  $result = true;   
}else{
    $result = false;
}
return $result;
}

//Checkt of je een cijfer invoert wat niet langer dan twee cijfers is
function invalidUserLevel($userlevel){
    $result = false;
    if(!preg_match(("/^[1-9][0-9]{0,1}$/"), $userlevel)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

//Checkt of er een geldig emailadres word ingevoerd.
function invalidEmail($email){
    $result = false;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else {
        $result = false;
    }
    return $result;
}

//checkt voor een telefoonnummer.
function invalidTel($telefoonnummer){
    $result = false;
     $filtered_phone_number = filter_var($telefoonnummer, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);
     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        $result = true;
     } else {
       $result = false;
     }
    return $result;
}

//checkt of bij het inloggen alle velden zijn ingevuld
function emptyInputLogin($email, $wachtwoord){
$result = false;
if(empty($email) || empty($wachtwoord) ){
  $result = true;   
}else{
    $result = false;
}
return $result;
}

function loginUser($conn, $email, $wachtwoord){
    $Mailbestaat = checkMail($conn, $email);
    if($Mailbestaat === false){
        header("location: ../login.php?error=incorrect_email");
        exit();
    }
    $wachtwoordHashed = $Mailbestaat['gebruikerpass'];
    $checkWachtwoord = password_verify($wachtwoord, $wachtwoordHashed);
    if($checkWachtwoord === false){
        header("location: ../login.php?error=wrong_pass");
        exit();
    }elseif($checkWachtwoord === true){
        session_start();
        $_SESSION["gebruikeruserlevel"] = $Mailbestaat['gebruikeruserlevel'];
        header("location: ../index.php");
        exit();
    }
    
}