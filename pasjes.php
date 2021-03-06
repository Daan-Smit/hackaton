<?php 
require "header.php";
?>
<?php 
if($_SESSION['gebruikeruserlevel'] != 2 && $_SESSION['gebruikeruserlevel'] != 5){
    header("location: index.php");
    exit();
}
?>

<div class="kaart_container">

    <div class="kaart_box">
            <div style="text-align: center;">
                <h3>Filteren op:</h3>
                <form class="filter-knoppen" action="pasjes.php" method="GET">
                    <!-- <button class="btn btn-dark" name="filter" value="favoriet">Favoriet</button>
                    <button class="btn btn-dark" name="filter" value="nieuw">Nieuw</button> -->
                    <button class="btn btn-dark" name="filter" value="korting">Korting</button>
                </form>
            </div>
        <?php 
        require_once "includes/dbh.inc.php";
        require_once "includes/functions.inc.php";
        ?>
        <?php
        if(!isset($_GET['filter'])){
        $data = bedrijvenophalen($conn);
        if ($data->num_rows > 0) {
          while($row = $data->fetch_assoc()) {
        ?>
          <a href="info_bedrijf.php?bedrijf=<?php echo $row["bedrijfslug"]; ?>">
            <div class='card' style="background-color: <?php echo $row["bedrijfkleurcode"]; ?>!important;" >
                    <div class='card-body' >
                        <div class='row'>
                            <div class='col-6'>
                                <span><?php echo $row["bedrijfnaam"]; ?><span>
                            </div>
                            <div class='col-6'>
                                <span class='procent'><?php echo $row["bedrijfkorting"]; ?> %</span>
                            </div>
                        </div>
                    </div>
            </div>
          </a> 
        <?php
          }
        }    
        }elseif($_GET['filter'] === 'korting'){
        $data = bedrijvenophalenkorting($conn);
        if ($data->num_rows > 0) {
          while($row = $data->fetch_assoc()) {
        ?>
          <a href="info_bedrijf.php?bedrijf=<?php echo $row["bedrijfslug"]; ?>">
            <div class='card' style="background-color: <?php echo $row["bedrijfkleurcode"]; ?>!important;" >
                    <div class='card-body' >
                        <div class='row'>
                            <div class='col-6'>
                                <span><?php echo $row["bedrijfnaam"]; ?><span>
                            </div>
                            <div class='col-6'>
                                <span class='procent'><?php echo $row["bedrijfkorting"]; ?> %</span>
                            </div>
                        </div>
                    </div>
            </div>
          </a> 
        <?php
          }
        }  
        }
        ?>
    </div>
</div>

<?php
require "footer.php";
