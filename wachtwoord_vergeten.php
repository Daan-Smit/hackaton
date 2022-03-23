<?php 
require "header.php";
?>

    <section>
        <h2>Inloggen</h2>
        <form action="includes/wachtwoord_vergeten.inc.php" method="post">
            <input type="text" name="email_ww_vergeten" placeholder="Email addres" placeholder="Email">
            <button type="submit" name="email_ww_vergeten-submit">wachtwoord aanvragen</button>
        </form>
    </section>

<?php
require "footer.php";
?>