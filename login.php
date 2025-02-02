<?php 
$identiteti = $_GET["emri"]; 
$pasi = $_GET["pasi"]; 
$i = 0; 
$fjalli = fopen('co.csv', 'r'); 
if($identiteti==="Alketa@gmail.com" && $pasi==="123")
{ 

    require('admin.php');
}
else { 

while (($rreshti = fgetcsv($fjalli, 1000, ',', '"', '\\')) !== false)
{ 
    if (isset($rreshti[4], $rreshti[5]) && $identiteti == $rreshti[4] && $pasi == $rreshti[5]) {

        header('Location:index.php?emri='.$rreshti[0] );
        break;
     }   
    $i++; 
} 

    fclose($fjalli); 
}
    ?>