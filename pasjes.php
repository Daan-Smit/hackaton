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
    ?>
    <div class="kaart_box">
        <?php 
        while($x >= 1){
            echo "<a href='$link'><div class='card'>
                    <div class='card-body Jumbo'>
                        <h3>$bedrijfsnaam</h3>
                    </div>
                  </div></a>";
            $x = $x - 1;
        }
        ?>
    </div>
</div>
<?php
require "footer.php";
?>