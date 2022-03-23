<?php 
require "header.php";
?>

    <section>
    <div>
        <h1>Registreer hier een nieuw bedrijf:</h1>
        <form action="includes/registrerenbedrijven.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="bedrijfnaam" placeholder="Bedrijfsnaam"><br>
            <input type="text" name="bedrijfbeschrijving" placeholder="Beschrijving"><br>
            <input type="file" name="bedrijflogo" ><br>
            <label for="status">Actief</label><br>
            <input type="radio" id="true" name="status" value="true">
            <label for="true">true</label><br>
            <input type="radio" id="flase" name="status" value="false">
            <label for="false">false</label><br>
            <input type="text" name="befrijflink" placeholder="Donatielink"><br>
            <input type="text" name="bedrijfkoring" placeholder="% Korting"><br>
            <input type="text" name="bedrijfdonatie" placeholder="% donatie"><br>
            <button type="submit" name="submit-bedrijf">Registreer Bedrijf</button>
        </form>
    </div>
    </section>

<?php
require "footer.php";
?>