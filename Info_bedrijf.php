<?php 
require "header.php";
require_once "includes/dbh.inc.php";
require_once "includes/functions.inc.php";
?>
<?php
//Hier check je voor een get
        if(!isset($_GET['bedrijf'])){
        //redirect
        header("location: pasjes.php");
        exit();
        }
        $bedrijf = $_GET['bedrijf'];
        $row = bedrijfophalen($conn, $bedrijf);

        ?>
            <div class="container-fluid achtergrond" style="background-color:<?php echo $row['bedrijfkleurcode'] ;?> ;">
                <div class="container vak">
                    <div class="row">
                        <div class="col inhoud">
                            <img class="logo" src="img/<?php echo $row['bedrijflogo'] ;?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col inhoud">
                            <a class="knop" href="qrcode.php">Genereer QRcode</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col inhoud">
                            <h1><?php echo $row['bedrijfkorting'] ;?>% korting</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col inhoud">
                            <p><?php echo $row['bedrijfbeschrijving'] ;?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col inhoud">
                            <p>Dit bedrijf heeft in totaal €<?php echo $row['bedrijftotaaldonatie'] ;?> gedoneerd.
                        </div>
                    </div>
                    <div class="row">
                        <div class="col inhoud">
                            <p>Dit bedrijf heeft in totaal €<?php echo $row['bedrijftotaalkorting'] ;?> korting gegeven.
                        </div>
                    </div>
                </div>
            </div>
        <?php  
        ?>


<?php
require "footer.php";
?>