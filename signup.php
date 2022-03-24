<?php 
require "header.php";
//Dit is het klantenregistreer systeem waar admins/de stichting klanten kunnen registreren.
?>
<?php 
if($_SESSION['gebruikeruserlevel'] != 5){
    header("location: index.php");
    exit();
}
?>
    <div class="container main">
        <h2>Registreren</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="email" placeholder="Email"><br>
            <input type="text" name="userlevel" placeholder="Userlevel"><br>
            <button class="btn btn-dark" type="submit" name="registreer-submit">Registreer</button>
        </form>
        <?php 
        //Hier worden alle errors en andere berichten weergeven
        if(isset($_GET['error'])){

            if ($_GET['error'] == "mailsend") {
                //Al deze dingen moeten automatisch gemailed worden naar de eind gebruikers
                echo "We hebben een mail met de inloggegevens naar de gebruiker gestuurd.";
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
    </div>


<?php
require "footer.php";
?>