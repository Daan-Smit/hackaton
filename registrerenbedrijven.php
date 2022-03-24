<?php 
require "header.php";
?>

    <section>
    <div class="container main">
        <h1>Registreer hier een nieuw bedrijf:</h1>
        <form action="includes/registrerenbedrijven.inc.php" method="post" enctype="multipart/form-data">
            <input type="text" name="bedrijfnaam" placeholder="Bedrijfsnaam"><br>
            <input type="text" name="bedrijfslug" placeholder="Slug"><br>
            <input type="text" name="bedrijfbeschrijving" placeholder="Beschrijving"><br>
            <input type="text" name="bedrijflogo" placeholder="Logo"><br>
            <label for="status">Actief</label><br>
            <input type="radio" id="true" name="status" value="true">
            <label for="true">true</label><br>
            <input type="radio" id="flase" name="status" value="false">
            <label for="false">false</label><br>
            <input type="text" name="befrijflink" placeholder="Donatielink"><br>
            <input type="text" name="bedrijfkorting" placeholder="% Korting"><br>
            <input type="text" name="bedrijfdonatie" placeholder="% donatie"><br>
            <input type="color" name="bedrijfkleurcode"><br>
            <button type="submit" name="submit-bedrijf">Registreer Bedrijf</button>
        </form>
    </div>
    <?php 
    if(isset($_GET['error'])){
        if($_GET['error'] == "succes"){
            echo "invoeren gelukt";
        }
    }
    ?>
    </section>

<?php
require "footer.php";
?>