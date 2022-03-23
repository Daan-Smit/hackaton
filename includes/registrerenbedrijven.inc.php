<?php
if(isset($_POST['submit-bedrijf'])){
    $bedrijfsnaam = $_POST['bedrijfnaam'];
    $bedrijfbeschrijving = $_POST['bedrijfbeschrijving'];

    //Ophalen bedrijfslogo
    $check = getimagesize($_FILES['bedrijflogo']['tmp_name']);
    if($check !== false){
        $image = $_FILES['bedrijflogo']['tmp_name'];
        $imageContent = addslashes(file_get_contents($image));
    }

    //Status, wanneer 1 is de status van de klant actief
    $status = $_POST['status'];
    if($status == true){
        $status = 1;
    }elseif($status == false){
        $status = 0;
    }

    $befrijflink = $_POST['befrijflink'];

    //string to double voor DB
    $bedrijfkoring = $_POST['bedrijfkoring'];
    $bedrijfkoring = bcadd($bedrijfkoring, '0',2);

    //string naar double voor DB
    $bedrijfdonatie = $_POST['bedrijfdonatie'];
    $bedrijfdonatie = bcadd($bedrijfkoring, '0',2);
}
?>