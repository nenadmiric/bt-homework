<?php
//var_dump($_POST);



if(empty($_POST["dan"])) {
    die ("Morate uneti dan");
}

if(empty($_POST["mesec"])) {
    die ("Morate uneti mesec");
}

if(empty($_POST["godina"])) {
    die ("Morate uneti godinu");
}

$dan = $_POST["dan"];
$mesec = $_POST["mesec"];
$godina = $_POST["godina"];


if(!is_int($dan) && ($dan < 1 || $dan > 31 )) {
    die ("Unesite vrednosti od 1 do 31 za dane");
}

if(!is_int($mesec) && ($mesec < 1 || $mesec > 12 )) {
    die ("Unesite vrednosti od 1 do 12 za mesece");
}

if(!is_int($godina) && ($godina < 1975 || $godina > 2022 )) {
    die ("Unesite vrednosti od 1975 do 2022 za godine");
}

if(isset($dan) && isset($mesec) && isset($godina)) {
    echo "Unesen je ispravan datum";
}




?>