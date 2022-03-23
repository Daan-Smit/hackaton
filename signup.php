<?php 
require "header.php";
//Dit is het klantenregistreer systeem waar admins/de stichting klanten kunnen registreren.
?>
    <section>
        <h2>Registreren</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="userlevel" placeholder="Userlevel">
            <button type="submit" name="registreer-submit">Registreer</button>
        </form>
        <?php 
        //Hier worden alle errors en andere berichten weergeven
        if(isset($_GET['error'])){
            if ($_GET['error'] == "none") {
                //Al deze dingen moeten automatisch gemailed worden naar de eind gebruikers
                $wachtwoord = $_SESSION['wachtwoord'];
                $email = $_SESSION['usermail'];
                echo "<p>De gebruiker is goed geregistreerd dit zijn zijn inlog gegevens:</p>";
                echo "<h5>Klantemail: $email</h5>";
                echo "<h5>Wachtwoord: $wachtwoord</h5>";
                echo "<p>Onthoud deze goed, als je je wachtwoord wilt veranderen klik op de onderstaande link: </p>";
                echo "<a href='changepass.php?usermail=$email' target='blank'>Verander wachtwoord Link</a>";
            }elseif($_GET['error'] == "emptyinput"){
                echo "Vul alle velden in!";
            }elseif($_GET['error'] == "email"){
                echo "Voer een geldig email adres in!";
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