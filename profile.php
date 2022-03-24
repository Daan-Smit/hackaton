<?php 
require "header.php";
?>
<div class="header_img">
    <h2>Mijn profiel</h2>
</div>
<div class="container main">
    <form action="profiel_wachtwoord_wijzigen.php">
        <button type="submit" class="btn">Wijzig uw wachtwoord</button>
    </form>
    <form action="index.php">
        <button type="submit" class="btn">Uitloggen</button>
    </form>
</div>

<?php
require "footer.php";
?>