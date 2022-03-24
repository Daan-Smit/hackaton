<?php
require "header.php";
?>
<div class="container main">
    <p>Kies het bedrag dat u wilt doneren</p>
    <form action="index.php" method="post">
        <input type="radio" name="geldaantal" value="10">€10<br/>
        <input type="radio" name="geldaantal" value="20">€20<br/>
        <input type="radio" name="geldaantal" value="50">€50<br/>
        <input type="radio" name="geldaantal" value="anders">anders<br/>
        <input type="textbox" name="eigen_bedrag"><br>
        <button class="btn btn-dark" type="submit" name="doneren-submit">Doneer</button>
    </form>
</div>
<?php
require "footer.php";
?>