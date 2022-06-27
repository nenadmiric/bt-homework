<?php

$visina_zida = $_POST['visina_zida'];

if (empty($visina_zida)) {
    echo "Niste uneli visinu zida";
}

echo "<br>";echo "<br>";

$sirina_zida = $_POST['sirina_zida'];

if (empty($sirina_zida)) {
    echo "Niste uneli sirinu zida";
}

echo "<br>";echo "<br>";

$duzina_plocice = $_POST['duzina_plocice'];

if (empty($duzina_plocice)) {
    echo "Niste uneli duzinu plocice";
}

echo "<br>";echo "<br>";

$sirina_plocice = $_POST['sirina_plocice'];

if (empty($sirina_plocice)) {
    echo "Niste uneli sirinu plocice";
}

echo "<br>";echo "<br>";

$povrsina_zida = $visina_zida * $sirina_zida;
$povrsina_plocice = $duzina_plocice * $sirina_plocice;
$broj_plocica = $povrsina_zida / $povrsina_plocice;
echo "Potreban broj plocica da bi se poplocao zid je " . $broj_plocica;

?>

