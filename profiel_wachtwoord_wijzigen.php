<?php 
require "header.php";
?>

    <section>
        <h2>Inloggen</h2>
        <form action="includes/profiel_wachtwoord_wijzigen.inc.php" method="post">
            <input type="text" name="profiel_nieuw_wachtwoord" placeholder="Nieuw wachtwoord">
            <input type="text" name="profiel_herhaal_wachtwoord" placeholder="Herhaal wachtwoord">
            <button type="submit" name="profiel_ww_wijzigen-submit">wijzig wachtwoord</button>
        </form>
    </section>

<?php
require "footer.php";
?>