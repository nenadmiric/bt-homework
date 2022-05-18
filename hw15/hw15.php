<?php
// Domaci 15

// Zadatak 1
/*
$hwArray = ["Pera", "Milka", "Pera", "Sonja", "Danilo", "Marica", "Ivica", "Sonja", "Vanja", "Mira"];
//a)
array_unshift($hwArray, "Nenad");
echo "<br>";
//b)
array_splice($hwArray, 2, 0, "Rodjak");
//c)
$k = count($hwArray);
echo "Ima ukupno " . $k . " ucenika.";
echo "<br>";
//d)
array_unshift($hwArray, "Novi clan");
echo "<br>";
//e)
array_splice($hwArray, 7, 1);
//f)
print_r(array_unique($hwArray));
*/

// Zadatak 2
/*
$data=array();
    $data['id1']=array(
        "name" => "Pera",
        "last_name" => "Peric",
        "age" => 28,
        'gender' => "male",
        'avg_rating' => 7.5,
        'married' => false,
        'courses' => "laravel, react, jQuery"
    );
    
    $data['id2']=array(
        'name' => "Mika",
        'last_name' => "Mikic",
        'age' => 34,
        'gender' => "male",
        'avg_rating' => 8.5,
        'married' => false,
        'courses' => "php, js, jQuery"
    );
    $data['id3']=array(
        'name' => "Jovana",
        'last_name' => "Jovanovic",
        'age' => 22,
        'gender' => "female",
        'avg_rating' => 9.5,
        'married' => false,
        'courses' => "laravel, net, css"
    );
    $data['id4']=array(
        'name' => "Milana",
        'last_name' => "Milanic",
        'age' => 44,
        'gender' => "female",
        'avg_rating' => 9,
        'married' => true,
        'courses' => "java, react, laravel"
    );
    $data['id5']=array(
        'name' => "Nikola",
        'last_name' => "Nikolic",
        'age' => 71,
        'gender' => "male",
        'avg_rating' => 6.5,
        'married' => true,
        'courses' => "bootstrap, c++, c#"
    );
echo $data['id1']['name'] . " " . $data['id1']['last_name'] . " ima " . $data['id1']['age'] . " godina i nije ozenjen. " . "Ima prosecnu ocenu " . $data['id1']['avg_rating'] . "," . " a kurseve koje trenutno slusa su: " . $data['id1']['courses'] . "<br>";
echo $data['id2']['name'] . " " . $data['id2']['last_name'] . " ima " . $data['id2']['age'] . " godina i nije ozenjen. " . "Ima prosecnu ocenu " . $data['id2']['avg_rating'] . "," . " a kurseve koje trenutno slusa su: " . $data['id2']['courses'] . "<br>";
echo $data['id3']['name'] . " " . $data['id3']['last_name'] . " ima " . $data['id3']['age'] . " godina i nije udata. " . "Ima prosecnu ocenu " . $data['id3']['avg_rating'] . "," . " a kurseve koje trenutno slusa su: " . $data['id3']['courses'] . "<br>";
echo $data['id4']['name'] . " " . $data['id4']['last_name'] . " ima " . $data['id4']['age'] . " godina i udata je. " . "Ima prosecnu ocenu " . $data['id4']['avg_rating'] . "," . " a kurseve koje trenutno slusa su: " . $data['id4']['courses'] . "<br>";
echo $data['id5']['name'] . " " . $data['id5']['last_name'] . " ima " . $data['id5']['age'] . " godina i ozenjen je. " . "Ima prosecnu ocenu " . $data['id5']['avg_rating'] . "," . " a kurseve koje trenutno slusa su: " . $data['id5']['courses'] . "<br>";
*/
?>
