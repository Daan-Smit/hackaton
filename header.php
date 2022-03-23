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
</head>
<body>
<?php 
session_start();
if(isset($_SESSION['gebruikeruserlevel'])){
$_SESSION['gebruikeruserlevel'] = 0;
}

?>
    <nav>
        <a href="index.php">
            <img style="max-width: 100px;" src="img/Lays-Logo.png" alt="logo">
        </a>
            <ul>
                <li><a href="index.php">Home</a></li>

                <?php 
                if ($_SESSION['gebruikeruserlevel'] === 0){
                    echo '<li><a href="contact.php">Contact</a></li>';
                    echo '<li><a href="login.php">Inloggen</a></li>';
                }elseif($_SESSION['gebruikeruserlevel'] >= 1){
                    echo '<li><a href="profile.php">Mijn profiel</a></li>';
                    echo '<li><a href="pasjes.php">Mijn pasjes</a></li>';
                }elseif($_SESSION['gebruikeruserlevel'] === 5){
                    echo '<li><a href="signup.php">Registreren</a></li>';
                }
                ?>
            </ul>
        <div>
        </div>
    </nav>
    <div>