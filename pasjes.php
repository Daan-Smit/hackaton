<?php 
require "header.php";
?>
<div class="header_img">
    <h1>Kortingspassen</h1>
</div>
<div class="kaart_container">
    <div class="kaart_box">
        <?php 
        require_once "includes/dbh.inc.php";
        require_once "includes/functions.inc.php";
        $data = bedrijvenophalen($conn);
        if ($data->num_rows > 0) {
          while($row = $data->fetch_assoc()) {
        ?>
            <div class='card' >
                    <div class='card-body' style="background-color: <?php echo $row["bedrijfkleurcode"]; ?>!important;">
                        <div class='row'>
                            <div class='col-6'>
                                <span><?php echo $row["bedrijfnaam"]; ?><span>
                            </div>
                            <div class='col-6'>
                                <span class='procent'><?php echo $row["bedrijfkorting"]; ?> %</span>
                            </div>
                        </div>
                    </div>
            </div>;
        <?php
          }
        }
        ?>
    </div>
</div>
<?php
require "footer.php";
?>