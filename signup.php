<?php 
require "header.php";
//Dit is een basic registreren pagina waar je met je voornaam, achternaam, email en telefoon nummer kan registreren.
//Nadat je bent geregistreerd krijg je een klantnummer en een wachtwoord waarmee je later kan inloggen.
?>
    <section>
        <h2>Registreren</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="voornaam" placeholder="Voornaam">
            <input type="text" name="achternaam" placeholder="Achternaam">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="telefoonnummer" placeholder="Telefoonnummer">
            <button type="submit" name="registreer-submit">Registreer</button>
        </form>
        <?php 
        //Hier worden alle errors en andere berichten weergeven
        if(isset($_GET['error'])){
            if ($_GET['error'] == "none") {
                $wachtwoord = $_SESSION['wachtwoord'];
                $userId = $_SESSION['userid'];
                echo "<p>Je bent goed geregistreerd, dit zijn je inlog gegevens:</p>";
                echo "<h5>Klantnummer: $userId</h5>";
                echo "<h5>Wachtwoord: $wachtwoord</h5>";
                echo "<p>Onthoud deze goed, als je je wachtwoord wilt veranderen klik op de onderstaande link: </p>";
                echo "<a href='changepass.php?userid=$userId' target='blank'>Verander wachtwoord</a>";
            }elseif($_GET['error'] == "emptyinput"){
                echo "Vul alle velden in!";
            }elseif($_GET['error'] == "char"){
                echo "Gebruik in de namen alleen normale karakters (a-z)!";
            }elseif($_GET['error'] == "email"){
                echo "Voer een geldig email adres in!";
            }elseif($_GET['error'] == "telefoon"){
                echo "Voer een geldig telefoonnummer in!";
            }elseif($_GET['error'] == "emailInUse"){
                echo "Het ingevoerde emailadres is al in gebruik.";
            }elseif($_GET['error'] == "stmtfailed"){
                echo "Er gaat iets fout, probeer op nieuw of neem contact met ons op.";
            }
        }
    ?>

    </section>


<?php
require "footer.php";
?>