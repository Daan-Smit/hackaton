<head>
    <link rel="stylesheet" href="css/extracss.css" />
</head>
<!-- <button style="margin-left: 90%;"><a href="info_bedrijf.php">Vorige pagina</a></button> -->
<a class="kruisjeknoptekst" href="Info_bedrijf.php"><p class="kruisjeknoptekst">X</p></a>

<?php
$pasnummer = "34k4nk4678kl2";
$code = '<center><img class="qrcode" src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl='. $pasnummer .'" title="QR Code"></center>';
echo $code;
echo "<center><h2>Dit is jou pascode: " . $pasnummer . "</h2></center>"; 
?>

