<?php

$sirina = 8;
$visina = 4; 
$poluPrecnik = 2;
$pi=3.14159265359;


function povrsinaKruznogBazena() {
  $GLOBALS['pKruznog'] = $GLOBALS['poluPrecnik'] * $GLOBALS['poluPrecnik'] * $GLOBALS['pi'];
}

povrsinaKruznogBazena();
echo "Povrsina kruznog bazena je " . $pKruznog;

echo "<br>";
echo "<br>";

function povrsinaPravougaonogBazena() {
  $GLOBALS['pPravougaonog'] = $GLOBALS['sirina'] * $GLOBALS['visina'];
}

povrsinaPravougaonogBazena();
echo "Povrsina pravougaonog bazena je " . $pPravougaonog;

echo "<br>";
echo "<br>";

function povrsinaPrvogBazena() {
  $GLOBALS['pPrvog'] = $GLOBALS['pPravougaonog'] + ($GLOBALS['pKruznog']/2);
}

povrsinaPrvogBazena();
echo "Povrsina najveceg bazena je " . $pPrvog;

echo "<br>";
echo "<br>";

function ukupnaPovrsinaBazena() {
    $GLOBALS['ukupnaP'] = $GLOBALS['pPravougaonog'] + $GLOBALS['pKruznog'] + $GLOBALS['pPrvog'];
  }
  
  ukupnaPovrsinaBazena();
  echo "Ukupna povrsina sva 3 bazena je " . $ukupnaP;

?>