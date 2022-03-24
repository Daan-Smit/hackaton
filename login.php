<?php 
require "header.php";
?>

    <div class="container main">
        <h2>Inloggen</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="gebruiker_mail" placeholder="Email addres"><br>
            <input type="password" name="gebruiker_wachtwoord" placeholder="Wachtwoord..."><br>
            <button type="submit" name="inlog-submit">Inloggen</button>
        </form>
    </div>
        <?php

        if(isset($_GET['error'])){
            if ($_GET['error'] == "none") {
                echo "Succesvol ingelogd";
            }elseif($_GET['error'] == "emptyinput"){
                echo "Vul alle velden in!";
            }elseif($_GET['error'] == "stmtfailed"){
                echo "Er gaat iets fout, probeer op nieuw of neem contact met ons op.";
            }elseif($_GET['error'] == "wrong_pass"){
                echo "Dit is niet het juiste wachtwoord.";
            }elseif($_GET['error'] == "incorrect_email"){
                echo "Dit is geen bestaand klantnummer of email adres.";
            }
            
        }
        ?>

<?php
require "footer.php";
?>