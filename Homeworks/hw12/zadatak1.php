<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hvala sto koristite nas sajt!</p>
<?php

$tezina = $_POST['tezina'];

$faktor_aktivnosti = $_POST['faktor_aktivnosti'];

if ($faktor_aktivnosti == "programer" || $faktor_aktivnosti == "administrativni radnik" || $faktor_aktivnosti == "menadzer") $faktor_aktivnosti = 100;
if ($faktor_aktivnosti == "policajac" || $faktor_aktivnosti == "vojnik") $faktor_aktivnosti = 200;
if ($faktor_aktivnosti == "sportista") $faktor_aktivnosti = 300;
if ($faktor_aktivnosti == "ostalo") $faktor_aktivnosti = 150;

$faktor_starosti = $_POST['faktor_starosti'];
if ($faktor_starosti<=3) $faktor_starosti = 1.9;
if (4<=$faktor_starosti && $faktor_starosti<=10) $faktor_starosti = 1.5;
if (11<=$faktor_starosti && $faktor_starosti<=18) $faktor_starosti = 1.2;
if (19<=$faktor_starosti && $faktor_starosti<=26) $faktor_starosti = 1;
if (27<=$faktor_starosti && $faktor_starosti<=30 || 50<=$faktor_starosti && $faktor_starosti<=60) $faktor_starosti = 0.8;
if (31<=$faktor_starosti && $faktor_starosti<=35 || 45<=$faktor_starosti && $faktor_starosti<=49) $faktor_starosti = 0.7;
if (36<=$faktor_starosti && $faktor_starosti<=44) $faktor_starosti = 0.6;
if ($faktor_starosti>60) $faktor_starosti = 0.6;

$max_kalorija = $tezina * $faktor_aktivnosti * $faktor_starosti;
echo "Maksimalan broj kalorija koji smete da unesete je " . $max_kalorija;
?>

</body>
</html>

