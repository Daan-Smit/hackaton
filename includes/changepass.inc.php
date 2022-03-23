<?php
//Error check dit nog even
if(!isset($_GET["changepass-submit"])){
    header("location: ../changepass.php");
    exit();
}