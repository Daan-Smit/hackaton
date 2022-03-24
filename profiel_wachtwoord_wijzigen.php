<?php 
require "header.php";
?>
<div class="container main">
    <h2>Verander uw wachtwoord</h2>
    <form action="includes/profiel_wachtwoord_wijzigen.inc.php" method="post">
        <input type="text" name="profiel_nieuw_wachtwoord" placeholder="Nieuw wachtwoord"><br>
        <input type="text" name="profiel_herhaal_wachtwoord" placeholder="Herhaal wachtwoord"><br>
        <button type="submit" name="profiel_ww_wijzigen-submit">wijzig wachtwoord</button>
    </form>
</div>
<?php
require "footer.php";
?>