<?php 
require "header.php";
?>

    <section>
        <h2>Inloggen</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="id_mail" placeholder="Klantnummer/Email...">
            <input type="password" name="wachtwoord" placeholder="Wachtwoord...">
            <button type="submit" name="inlog-submit">Inloggen</button>
        </form>
        <?php

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
            }elseif($_GET['error'] == "stmtfailed"){
                echo "Er gaat iets fout, probeer op nieuw of neem contact met ons op.";
            }elseif($_GET['error'] == "wrong_pass"){
                echo "Dit is niet het juiste wachtwoord.";
            }elseif($_GET['error'] == "incorrect_userid_mail"){
                echo "Dit is geen bestaand klantnummer of email adres.";
            }
            
        }
        ?>
    </section>

<?php
require "footer.php";
?>