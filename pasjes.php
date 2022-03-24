<?php 
require "header.php";
?>
<div class="header_img">
    <h1>Kortingspassen</h1>
</div>
<div class="kaart_container">
    <?php
    $x = 10;
    $bedrijfsnaam = "Jumbo";
    $link = '#';
    $kortingspercentage = "5%";
    ?>
    <div class="kaart_box">
        <?php 
        while($x >= 1){
            echo "<div class='card '>
                    <div class='card-body'>
                        <div class='row'>
                            <div class='col-6'>
                                <span>$bedrijfsnaam<span>
                            </div>
                            <div class='col-6'>
                                <span class='procent'>$kortingspercentage</span>
                            </div>
                        </div>
                    </div>
                  </div>";
            $x = $x - 1;
        }
        ?>
    </div>
</div>
<?php
require "footer.php";
?>