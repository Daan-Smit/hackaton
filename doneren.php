<?php
require "header.php";
?>
<div class="container main">
    <form action="includes/donere.inc.php" method="post">
        <input type="radio" name="geldaantal" value="10">€10<br/>
        <input type="radio" name="geldaantal" value="20">€20<br/>
        <input type="radio" name="geldaantal" value="50">€50<br/>
        <input type="radio" name="geldaantal" value="anders">anders<br/><br/>
        <!--functie om textbox te laten zien als anders is geselecteerd-->
        <button class="btn btn-dark" type="submit" name="doneren-submit">Doneer</button>
    </form>
</div>
<?php
require "footer.php";
?>