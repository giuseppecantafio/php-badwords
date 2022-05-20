<?php
$stringa = 'Pasta al sugo e carne al sugo';

if(isset($_GET['variabile'])){
    $modificatore = $_GET['variabile'];
} else {
    $stringa = 'Si prega di inserire un valore nella URL (URL/?variabile=testo)';
};
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
</head>
<body>
    <h2>Stringa inserita:</h2>
    <p><?php echo $stringa; ?></p>
    <p><?php echo 'La lunghezza della stringa è '.strlen($stringa); ?></p>

    <h2>Stringa modificata:</h2>
    <p><?php echo $nuovaStringa = str_replace($modificatore, '***', $stringa); ?></p>
    <p><?php echo 'La lunghezza della stringa modificata è '.strlen($nuovaStringa); ?></p>
</html>