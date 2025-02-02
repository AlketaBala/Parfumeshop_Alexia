<?php
$data = $_GET["emri"];
$vlera = $_GET["vlera"];
$array = str_split($vlera);


$i = 0;
$fjalli = fopen('co.csv', 'r');
while(! feof($fjalli))
{
    $a[$i] = fgetcsv($fjalli,1000, ",", '"', '\\');
    $i++;
}
fclose($fjalli);

$a[$array[0]][$array[1]]=$data;


$fjalli = fopen('co.csv', 'w');
foreach ($a as $row) { 
    if (is_array($row)) { 
        fputcsv($fjalli, $row, ",", '"', '\\'); 
    } else {
    }
}
fclose($fjalli);


require 'admin.php';

?>