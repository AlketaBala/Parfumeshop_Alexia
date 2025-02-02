<style>
body {
padding: 0px;
margin: 0px;
background-color: 741414;

  }
h1 {
color:ffffff;
text-align:center;
top :20px;

}

.button {
    width: 250px;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #04AA6D;} /* Green */
.button2 {background-color: #ff1b1b;} /* Blue */

  #links {
position: absolute;
top: 50px;
left: 100px;
width: 800px;
height:500px;
background-color: #f0f0ff;
        color: #741414;
text-align:center;
  }
  #rechts {
position: absolute;
top: 50px;
right: 100px;
width: 600px;
height:500px;
background-color: #741414;
text-align:center;
  }



</style>

<style>

.csvTable{
    font-size: 12pt;

}    

.csvTable th{
    text-align:center;
    border-bottom: 1px solid #fff;
}

.csvTable td{

    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    text-align:center;
    color: #741414;
}    

</style>

<h1>B a s k e t</h1>
 <div id="links">
<?php
$id = isset($_GET["id"]) ? $_GET["id"] : null; 
$emri = isset($_GET['emri']) ? $_GET['emri'] : null;

$i = 0;
$fjalli = fopen('shporta.csv', 'r');
while (!feof($fjalli)) {
    $rresht = fgetcsv($fjalli, 1000, ',', '"', '\\');
    if ($rresht !== false) {
        $a[$i] = $rresht;
        $i++;
    }
}
fclose($fjalli);

if ($emri == "") {
    echo "Ju nuk jeni kyçur. Kliko këtu për tu kyçur <a href='loginform.php'>Kyçu</a>";
} else {
    $linku = $emri . ".csv";
    $fp = fopen($linku, 'a');
    if (isset($a[$id])) {
        fputcsv($fp, $a[$id], ',', '"', '\\');
    }
    fclose($fp);

    $i = 0;
    $fjalli = fopen($linku, 'r');
    $aa = [];
    while (!feof($fjalli)) {
        $rresht = fgetcsv($fjalli, 1000, ',', '"', '\\');
        if ($rresht !== false) {
            $aa[$i] = $rresht;
            $i++;
        }
    }
    fclose($fjalli);

    echo "<br>Items in Basket: <br><br>";
$shuma=0;
$numri=0;
echo "<table class='csvTable'><td> __Item code__ </td><td> ____Item name____ </td><td> __________Item description__________ </td><td> __Item price__ </td><td> __Item quantity__ </td>";

    for ($i = 0; $i < count($aa); $i++) {
        echo "<tr>";
        if (is_array($aa[$i])) {
            for ($j = 0; $j < count($aa[$i]); $j++) {
             echo "<td>";
             echo htmlspecialchars($aa[$i][$j]);
             echo "</td>";                
            }
        }
        echo "</tr>";
        $shuma=$shuma+$aa[$i][3];
        $numri=$numri+1;
    }

             echo "</table>";
    echo "<br>Number of items ordered......................  ".$numri." piece<br>";
    echo "<br>Total amount...................................".$shuma." EURO";
echo "</div><div id='rechts'>";
    echo "<br><a href='index.php?emri=" . urlencode($emri) . "'><button class='button button1'>Add item to Basket</button></a>";

    echo "<br><a href='?id= &delete=1&emri=" . urlencode($emri) . "' onclick=\"return confirm('A jeni të sigurt që dëshironi të fshini shportën?');\"><button class='button button2'>Delete Items in Basket</button></a>";
    echo "<br><a href='?id= &delete=0&emri=" . urlencode($emri) . "' onclick=\"return confirm('A jeni të sigurt që dëshironi të dergoni porosin?');\"><button class='button button1'>Send Order</button></a>";
}
if (isset($_GET['delete']) && $_GET['delete'] == 1 && isset($_GET['emri'])) {
    $linku = $_GET['emri'] . ".csv";
    if (file_exists($linku)) {
        unlink($linku); // Delete the file
        echo "<br>Shporta u fshi me sukses.";
    } else {
        echo "<br>Shporta nuk ekziston.";
    }
}
if (isset($_GET['delete']) && $_GET['delete'] == 0 && isset($_GET['emri'])) {
    $linku = $_GET['emri'] . ".csv";
    $ri = $_GET['emri'] . ".csp";

rename($linku, $ri);
        echo "<br>porosia u dergua.";

}
?></div>