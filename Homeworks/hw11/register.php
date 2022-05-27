<?php

$ime = $_GET['ime'];
if (empty($ime)) {
    echo "Niste uneli ime";
}
echo "<br>";

$prezime = $_GET['prezime'];
if (empty($prezime)) {
    echo "Niste uneli prezime";
}
echo "<br>";

$gender = $_GET['gender'];

if (empty($gender)) {
    echo "Niste odabrali pol";
}
echo "<br>";

if ($gender == "muski") {
    echo "Postovani " . $ime . " " . $prezime;
} else {
    echo "Postovana " . $ime . " " . $prezime;
}
echo "<br>";
echo "Uspesno ste se registrovali na nasem sajtu!";
echo "<br>";
$password = $_GET['password'];
echo "Vasa lozinka je: " . $password;
if (empty($password)) {
    echo "Niste uneli lozinku";
}

echo "<br>";

$email = $_GET['email'];
echo "Vas username je: " . $email;
if (empty($email)) {
    echo "Niste uneli email";
}

echo "<br>";

$kursevi = $_GET['kursevi'];
echo "Vasi odabrani kursevi su: " . $kursevi;
if (empty($kursevi)) {
    echo "Niste odabrali kurs";
}



?>