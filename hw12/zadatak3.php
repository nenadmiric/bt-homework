<?php

//Uneti zeljenu vrednost:

$n = "7" ;

if (empty($n)) {
    echo "Niste uneli vrednost";
}

$zbir = 0;

for($i = 1; $i <= $n; ++$i)
{
$zbir = $zbir + $i;
}

echo "<br>";

echo "Zbir prvih $n prirodnih brojeva je $zbir";

?>