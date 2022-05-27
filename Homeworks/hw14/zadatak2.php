<?php

if(empty($_POST["ukupnoGorivo"])) {
    die ("Morate uneti ukupno gorivo");
}

if(empty($_POST["potrosnaPoKamionu"])) {
    die ("Morate uneti potrosnju po kamionu");
}

$ukupnoGorivo = $_POST['ukupnoGorivo'];
$potrosnaPoKamionu = $_POST['potrosnaPoKamionu'];


function brojKamionaIliOstatakLitraGoriva($ukupnoGorivo, $potrosnaPoKamionu) {
    $brojKamiona = $ukupnoGorivo / $potrosnaPoKamionu;
    $ostatakGoriva = $ukupnoGorivo % $potrosnaPoKamionu;
    
    $boolean=false;
    if($boolean) {
        return "Ostalo je " . $ostatakGoriva . " litara goriva.";
    } else {
        return "Broj kamiona je " . $brojKamiona . ".";
    }
    
    }
    
    echo brojKamionaIliOstatakLitraGoriva($ukupnoGorivo, $potrosnaPoKamionu);


?>