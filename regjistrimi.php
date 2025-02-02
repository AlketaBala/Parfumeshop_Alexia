<?php
 $daten =array($_GET["emri"], $_GET["mbiemri"], $_GET["vendi"], $_GET["ditelindja"], $_GET["email"],$_GET["pasi"]); 
 $fp = fopen('co.csv', 'a'); 
 fputcsv($fp, $daten, ',', '"', '\\');
 fclose($fp); 
 require 'loginform.php'; 
 ?>