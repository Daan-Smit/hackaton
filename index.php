<?php 
require "header.php";
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
    <form action="doneren.php">
        <button type="submit" class="btn">Doneer nu zelf</button>
    </form>
    <p>Onze sponsors</p>
    
    <div class="container opbrengst">
        <!--repeat-->
        <div class="row">
            <div class="col inhoud">
                <img class="logo-home" src="img/jumbo_logo.png">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col inhoud">
                <img class="logo-home" src="img/jumbo_logo.png">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col inhoud">
                <img class="logo-home" src="img/jumbo_logo.png">
            </div>
        </div>
    </div>
    <!--einde repeat-->
</div>
<?php
require "footer.php";
?>