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
<body>
<?php 
session_start();
?>
    <nav>
        <a href="index.php">
            <img style="max-width: 100px;" src="img/Lays-Logo.png" alt="logo">
        </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link"  href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link"  href="style.php">TEST</a></li>

                <?php 
                if (isset($_SESSION['userId'])){
                    //Wanneer je een userlevel hebt
                    echo '<li class="nav-item"><a class="nav-link"  href="profile.php">Mijn profiel</a></li>';
                    echo '<li class="nav-item"><a class="nav-link"  href="pasjes.php">Mijn pasjes</a></li>';
                }else{
                    //wanneer je niet ingelogd bent
                    echo '<li class="nav-item"><a class="nav-link"  href="contact.php">Contact</a></li>';
                    echo '<li class="nav-item"><a class="nav-link"  href="login.php">Inloggen</a></li>';
                }
                ?>
            </ul>
        <div>
        </div>
    </nav>
    <div>