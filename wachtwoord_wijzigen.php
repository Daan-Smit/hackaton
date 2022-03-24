<?php 
require "header.php";
?>
<?php 
if($_SESSION['gebruikeruserlevel'] != 2 && $_SESSION['gebruikeruserlevel'] != 5){
    header("location: index.php");
    exit();
}
?>

    <div class="container main">
        <h2>Wachtwoord wijzigen</h2>
        <form action="login.php" method="post">
            <input type="text" name="nieuw_wachtwoord" placeholder="Nieuw wachtwoord"><br>
            <input type="text" name="herhaal_wachtwoord" placeholder="Herhaal wachtwoord"><br>
            <button class="btn btn-dark" type="submit" name="ww_wijzigen-submit">wijzig wachtwoord</button>
        </form>
    </div>

<?php
require "footer.php";
?>