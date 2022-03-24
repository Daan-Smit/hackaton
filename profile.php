<?php 
require "header.php";
?>
<div class="header_img">
    <h2>Mijn profiel</h2>
</div>
<div class="container main">
    <h2>Wat heb ik bespaard:</h2>
    <h3>€<!--variabele bespaard--></h3>
    <br>
    <h2>Wat heb ik opgehaald:</h2>
    <h3>€<!--variabele opgehaald--></h3>

    <form action="profiel_wachtwoord_wijzigen.php">
        <button type="submit" class="btn">Wijzig uw wachtwoord</button>
    </form>
</div>

<?php
require "footer.php";
?>