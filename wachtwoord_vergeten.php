<?php 
require "header.php";
?>
<?php 
if($_SESSION['gebruikeruserlevel'] != 1){
    header("location: index.php");
    exit();
}
?>

    <div class="container main">
        <h2>Wachtwoord vergeten</h2>
        <form action="wachtwoord_wijzigen.php" method="post">
            <input type="text" name="email_ww_vergeten" placeholder="Email addres" placeholder="Email"><br>
            <button class="btn btn-dark" type="submit" name="email_ww_vergeten-submit">wachtwoord aanvragen</button>
        </form>
    </div>

<?php
require "footer.php";
?>