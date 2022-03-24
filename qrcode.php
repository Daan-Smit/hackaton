<?php 
require "header.php";
?>

<?php
$pasnummer = "34k4nk4678kl2";
$code = '<center><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl='. $pasnummer .'" title="QR Code"></center>';
echo $code;
?>

<?php
require "footer.php";
?>