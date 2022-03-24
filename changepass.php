<?php 
require "header.php";
?>

<?php 
if($_SESSION['gebruikeruserlevel'] != 2 && $_SESSION['gebruikeruserlevel'] != 5){
    header("location: index.php");
    exit();
}
?>

    <section>
        <h2>Verander je wachtwoord</h2>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="huidigpass" placeholder="Huidige Wachtwoord...">
            <input type="password" name="newpass" placeholder="Nieuw wachtwoord...">
            <input type="password" name="repnewpass" placeholder="Herhaal nieuw wachtwoord...">
            <button type="submit" name="changepass-submit">Inloggen</button>
        </form>
    </section>

    <?php 
    //Check of de gebruiker op de juiste manier hier is gekomen.
    if(! isset($_GET['userId'])){
        header("location: signup.php");
        exit();
    }else{
    //Voer hier in wat we aan php willen doen.
    }
    ?>

<?php
require "footer.php";
?>