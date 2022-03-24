<?php 
require "header.php";
?>
<div class="header_img_2">
    <h2>Mijn profiel</h2>
</div>
<div class="container main">
    <form action="profiel_wachtwoord_wijzigen.php">
        <button type="submit" class="btn">Wijzig uw wachtwoord</button>
    </form>
    <form action="profile.php" method="POST">
        <button type="submit" class="btn" name="logout">Uitloggen</button>
    </form>
</div>
<?php 
if(isset($_POST['logout'])){
    $_SESSION['gebruikeruserlevel'] = NULL;
    header("location: index.php");
    exit();
}
?>
<?php
require "footer.php";
?>