<?php 
require "header.php";
require_once "includes/dbh.inc.php";
require_once "includes/functions.inc.php";
?>
<div class="header_img">
    <h1>Welkom bij<br>Stichting Leergeld</h1>
    <h2>Alle kinderen mogen meedoen!</h2>
</div>
<div class="container main">
    <p>In Nederland leeft 1 op de 12 kinderen in armoede. 
        Deze kinderen kunnen om financiële redenen niet meedoen aan 
        activiteiten die voor hun leeftijdsgenootjes heel normaal zijn. 
        Zij staan vaak letterlijk aan de zijlijn. 
        Leergeld wil deze kinderen mee laten doen!</p>
    <?php
    if($_SESSION['gebruikeruserlevel'] != 2){
        ?>
        <form action="doneren.php">
        <button type="submit" class="btn">Doneer nu zelf</button>
        </form>
        <?php
    }
    ?>


    <h2 style="margin-top: 50px;">Bedankt sponsoren!</h2>
    
    <div class="container opbrengst">
        <?php
        $data = bedrijvenophalen($conn);
        if ($data->num_rows > 0) {
          while($row = $data->fetch_assoc()) {
        ?>
        <!--repeat-->
        <div class="row">
            <div class="col inhoud">
                <img class="logo-home" src="img/<?php echo $row["bedrijflogo"] ;?>">
            </div>
        </div>
        <br>

            <?php 
            }
        }
            ?>
    </div>
    <!--einde repeat-->
</div>
<?php
require "footer.php";
?>