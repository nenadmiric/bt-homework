<?php
$niz1 = $_POST['niz1'];
$niz2 = $_POST['niz2'];

//zbir
$zbir = array();
for($i=0;$i<count($niz1);$i++) {
  $zbir[$i] = $niz1[$i]+$niz2[$i];
}
echo "Zbir unetih brojeva niza je ";
print_r($zbir);

echo "<br>";

//razlika
$razlika = array();
for($i=0;$i<count($niz1);$i++) {
  $razlika[$i] = $niz1[$i]-$niz2[$i];
}
echo "Razlika unetih brojeva niza je ";
print_r($razlika);

echo "<br>";

//proizvod
$proizvod = array();
for($i=0;$i<count($niz1);$i++) {
  $proizvod[$i] = $niz1[$i]*$niz2[$i];
}
echo "Proizvod unetih brojeva niza je ";
print_r($proizvod);

echo "<br>";

//kolicnik
$kolicnik = array();
for($i=0;$i<count($niz1);$i++) {
  $kolicnik[$i] = $niz1[$i]/$niz2[$i];
}
echo "Kolicnik unetih brojeva niza je ";
print_r($kolicnik);
