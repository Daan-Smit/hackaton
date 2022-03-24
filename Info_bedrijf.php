<?php 
require "header.php";
?>

<div class="container-fluid achtergrond">
    <div class="container vak">
        <div class="row logo">
            <div class="col inhoud">
                <img src="img/logo_leergeld.png">
            </div>
        </div>
        <div class="row">
            <div class="col inhoud">
                <a class="knop" href="qrcode.php">Genereer QRcode</a>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col inhoud">
                <img src="img/Heart.png" style="width: 30px; height: 30px;">
            </div>
        </div> -->
        <div class="row">
            <div class="col inhoud">
                <h1>5% korting</h1>
            </div>
        </div>
        <div class="row">
            <div class="col inhoud">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Curabitur molestie est non nulla condimentum elementum eget 
                    in eros. Maecenas lacinia aliquet justo, eget scelerisque 
                    justo auctor eu. Aliquam tristique eget nibh quis gravida. 
                    Cras non eros quam. Vivamus et leo faucibus, aliquet erat at, 
                    tincidunt massa. Etiam dapibus eu ipsum vitae facilisis. Vivamus 
                    pretium ante eget lacinia mollis. Nulla facilisis condimentum 
                    dui vitae placerat. Donec quis lacus eu sem placerat ultricies 
                    id at felis. Duis est tellus, suscipit pulvinar urna vitae, 
                    luctus posuere nisl. Quisque facilisis lacus ac ultricies auctor. 
                    Integer vel tempor neque, et pellentesque metus. 
                    Curabitur eu nunc quis elit pulvinar euismod. 
                    Nulla elementum enim nunc, ac scelerisque lorem viverra id. 
                    Sed id consectetur quam, eu feugiat arcu. Vestibulum vel 
                    pulvinar augue.</p>
            </div>
        </div>
        <div class="row">
            <div class="col inhoud">
                <p>Dit bedrijf heeft in totaal €<!--variabele geldaantal--> gedoneerd.
            </div>
        </div>
        <div class="row">
            <div class="col inhoud">
                <p>Dit bedrijf heeft in totaal €<!--variabele geldaantal--> korting gegeven.
            </div>
        </div>
    </div>
</div>

<?php
require "footer.php";
?>