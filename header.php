<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <link rel="stylesheet" href="scss/index.css" />
</head>
<body>
<?php 
session_start();
if(!isset($_SESSION['gebruikeruserlevel'])){
$_SESSION['gebruikeruserlevel'] = 5;
}

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
                <img style="max-width: 100px;" src="img/logo_leergeld.png" alt="logo">
            </a>
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

                    <?php 

                    if ($_SESSION['gebruikeruserlevel'] === 1 || $_SESSION['gebruikeruserlevel'] === 5){
                        echo '<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Inloggen</a></li>';
                    }
                    if($_SESSION['gebruikeruserlevel'] >= 2){
                        echo '<li class="nav-item"><a class="nav-link" href="profile.php">Mijn profiel</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="pasjes.php">Mijn pasjes</a></li>';
                        echo '<li class="nav-item"><a class="nav-link" href="qrcode.php">QR Code</a></li>';
                    }
                    if($_SESSION['gebruikeruserlevel'] === 5){
                        echo '<li class="nav-item"><a class="nav-link" href="registrerenbedrijven.php">Registreren</a></li>';
                    }


                    ?>
                </ul>
                
            </div>
        </div>
    </nav>
    <div>