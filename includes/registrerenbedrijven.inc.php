<?php
if(isset($_POST['submit-bedrijf'])){
    $bedrijfnaam = $_POST['bedrijfnaam'];
    $bedrijfslug = $_POST['bedrijfslug'];
    $bedrijfbeschrijving = $_POST['bedrijfbeschrijving'];

    //Ophalen bedrijfslogo
    //Maak hier nog een functie van
    $bedrijflogo = $_POST['bedrijflogo'];

    //Status, wanneer 1 is de status van de klant actief
    //Maak hier een functie van
    $status = $_POST['status'];
    if($status == true){
        $status = 1;
    }elseif($status == false){
        $status = 0;
    }

    $befrijflink = $_POST['befrijflink'];

    //string to double voor DB
    $bedrijfkorting = $_POST['bedrijfkorting'];
    $bedrijfkorting = bcadd($bedrijfkorting, '0',2);

    //string naar double voor DB
    $bedrijfdonatie = $_POST['bedrijfdonatie'];
    $bedrijfdonatie = bcadd($bedrijfdonatie, '0',2);

    $bedrijfkleurcode = $_POST['bedrijfkleurcode'];

    //!!!!!LETOP HIER MOETEN NOG INVOER CHECKS KOMEN!!!!!!
    //unique slug - naam - status - bedrijf fake check - 

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    insertbedrijf($conn, $bedrijfnaam, $bedrijfslug, $bedrijfbeschrijving, $bedrijflogo, $status, $befrijflink, $bedrijfkorting, $bedrijfdonatie, $bedrijfkleurcode);
}
?>