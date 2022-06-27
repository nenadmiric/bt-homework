<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "colors";

$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

// U phpmyadmin sam kreirao tabelu i insertovao vrednosti
/*
CREATE TABLE colors (
	id int(10) not NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(30) not NULL,
    hex_value varchar(30) not NULL,
    status int(1),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
*/
/*
INSERT INTO `colors`(`name`, `hex_value`, `status`) VALUES 
('Beige','#6507ed','1'),
('DarkGray','#728016','1'),
('Salmon','#acd8e7','1'),
('Linen','#a4546f','0'),
('LightCoral','#e1924e','0'),
('LightSkyBlue','#70a42','0'),
('SeaShell','#fab686','0'),
('Navy','#2a486c','0'),
('LavenderBlush','#aaead1','1'),
('LightBlue','#cdda18','0');
*/


echo "<strong>Prvi primer</strong>";
echo "<br>";
echo "<br>";
$sql = "SELECT * FROM colors WHERE status=1 ORDER BY created_at ASC;";

$result = mysqli_query($connect, $sql);
$resultcheck = mysqli_num_rows($result);

if ($resultcheck>0) {
    while ($row = mysqli_fetch_assoc($result)) {
        foreach ($row as $key => $value) {
            echo "
            <table>
            <tr>
            <td>$key
            <td>$value
            </tr>
            ";
        }
    }
}

echo "<br>";
echo "<br>";
echo "<br>";

echo "<strong>Drugi primer - random 5 boja</strong>";
echo "<br>";
echo "<br>";

$string2 = "SELECT name FROM colors ORDER BY RAND() LIMIT 5;";
$result1 = mysqli_query($connect, $string2);
$resultcheck1 = mysqli_num_rows($result1);

if ($resultcheck1>0) {
    while ($row1 = mysqli_fetch_assoc($result1)) {
        foreach ($row1 as $key1 => $value1) {
            echo $key1 . $value1 . "<br>";
        }
    }
}

$string3 = "INSERT INTO `colors`(`id`, `name`, `hex_value`, `status`, `created_at`, `updated_at`) VALUES ('11','novaBoja','#00EB07','0','2022-06-05 12:57:13','2022-06-05 12:57:13');";

$string4 = "UPDATE colors SET status=1 WHERE status=0;";

$string5 = "DELETE FROM `colors` WHERE id=5;";

$string6 = "DELETE FROM `colors` WHERE updated_at IS NOT NULL ORDER BY updated_at DESC LIMIT 1;";


?>