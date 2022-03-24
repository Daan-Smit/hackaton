<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<?php 
require_once "includes/dbh.inc.php";
require_once "includes/functions.inc.php";

//Dit werkt
// $data = bedrijvenophalen($conn);
// if ($data->num_rows > 0) {
//   // output data of each row
//   while($row = $data->fetch_assoc()) {
//     echo "bedrijfnaam: " . $row["bedrijfnaam"] . "<br>";
//   }
// } else {
//   echo "0 results";
// }
?>

<div class="header_img">
    <h1>Kortingspassen</h1>
</div>
<div class="kaart_container">
    <div class="kaart_box">
        <?php 
        $data = bedrijvenophalen($conn);
        if ($data->num_rows > 0) {
          while($row = $data->fetch_assoc()) {
          ?>
            <a href='#'>
              <div class='card' style="backgroundcolor: <?php echo $row["bedrijfkleurcode"];?>">
                    <div class='card-body Jumbo'>
                        <h3><?php echo $row["bedrijfnaam"];?></h3>
                    </div>
              </div>
            </a>;
            
            <?php
          }
        }else {
          echo "0 results";
        }
        ?>
    </div>
</div>
    
<?php
require "footer.php";
?>