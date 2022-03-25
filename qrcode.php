<head>
    <link rel="stylesheet" href="scss/index.css" />
</head>
<?php 
session_start();
if($_SESSION['gebruikeruserlevel'] != 2 && $_SESSION['gebruikeruserlevel'] != 5){
    header("location: index.php");
    exit();
}

//bedrijf ophalen
if(!isset($_GET['bedrijf'])){
    header("location: pasjes.php");
    exit();
}
$bedrijf = $_GET['bedrijf'];
?>

<a class="terugknop" href="Info_bedrijf.php?bedrijf=<?php echo $bedrijf ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="90px" height="90px" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
</a>

<?php
if(!isset($_GET['qrcode'])){
    header("location: pasjes.php?error=QR");
    exit();
}
$pasnummer = $_GET['qrcode'];

$code = '<center><img class="qrcode" src="https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl='. $pasnummer .'" title="QR Code"></center>';
echo $code;
echo "<center><h2>Dit is jou pascode: " . $pasnummer . "</h2></center>"; 
?>

