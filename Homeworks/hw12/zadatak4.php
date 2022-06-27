<?php

$brzina_puza = 3;
$rast_drveta = 1;
$visina_drveta = 100;
$dan = 0;
$predjena_razdaljina = 0;

while ($predjena_razdaljina<=$visina_drveta) {
    echo "Dan $dan : Puz je presao $predjena_razdaljina , visina drveta je $visina_drveta .";
    echo "<br>";
    $visina_drveta = $visina_drveta + $rast_drveta;
    $predjena_razdaljina = $predjena_razdaljina + $brzina_puza;
    $dan = $dan + 1;


    if ($predjena_razdaljina>$visina_drveta) {
        $dan = $dan -1;
        echo "Puz se popeo na drvo za $dan dana.";
    }
  }



?>