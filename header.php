<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
session_start();
?>
    <nav>
        <a href="index.php">
            <img style="max-width: 100px;" src="img/Lays-Logo.png" alt="logo">
        </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="huren.ph">Huren</a></li>
                <li><a href="fietsen.php">Contact</a></li>
                <?php 
                if (isset($_SESSION['userId'])){
                    echo '<li><a href="acount.php">Mijn Acount</a></li>';
                }else{
                    echo '<li><a href="signup.php">Registreren</a></li>';
                    echo '<li><a href="login.php">Inloggen</a></li>';
                }
                ?>
            </ul>
        <div>
        </div>
    </nav>
    <div>