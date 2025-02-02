<style>
body {
padding: 0px;
margin: 0px;
background-color: #FAFAFA;
  }
  #kopf {
height: 100px;
margin: 10px;
background-color: #FAFAFA;
  }
  #fuss {
height: 50px;
margin: 10px;
background-color: #FAFAFA;
  }
  #mitte {
position: relative;
width: 100%;
  }
  #inhalt {
margin: 0px 250px;
background-color: #FAFAFA;
  }
  #links {
position: absolute;
top: 0px;
left: 10px;
width: 200px;

background-color: #FAFAFA;
  }
  #rechts {
position: absolute;
top: 0px;
right: 10px;
width: 200px;
height: 100%;
background-color: #FAFAFA;
  }



input[type="text"] {
    width: 100px;
    height: 20px;
    padding-right: 50px;
}

input[type="submit"] {
    margin-left: -50px;
    height: 20px;
    width: 50px;
    background: #088A85;
    color:rgb(255, 255, 255);
    border: 0;
    -webkit-appearance: none;
}
</style>
  <div id="links">
    
<h1>    Antaret</h1>
<?php
$i = 0;
$fjalli = fopen('co.csv', 'r');
while(! feof($fjalli))
{
    $a[$i] = fgetcsv($fjalli,1000, ",", '"', '\\');
    $i++;
}
fclose($fjalli);


for ($i = 0; $i < (count($a)-1); $i++)
{
echo "<br>";
    for ($j = 0; $j < count($a[$i]); $j++) {

        echo '<form action="edit.php" method="GET">
        <input  name="emri" value='.$a[$i][$j].'>
        <input  name="vlera"  type="submit" value="'.$i.$j.'">
        </form>';
    }
echo "<br>";
}




?>

</div>

  <div id="inhalt">

  <?php
  $shuma=0;
$verzeichnis = opendir("./"); // Open the directory
while (($file = readdir($verzeichnis)) !== false) { // Read each item in the directory
    // Check if the file is not "." or ".." and ends with ".csp"
    if ($file != "." && $file != ".." && substr($file, -4) == '.csp') {
        $linku = $file;
        echo "<li><a href='?emri=Alketa%40gmail.com&pasi=123&delete=0&linku=" . urlencode($linku) . "'>" . $file . "</a></li>";
    }
}
closedir($verzeichnis); // Close the directory

if (isset($_GET['delete']) && $_GET['delete'] == 0 && isset($_GET['linku'])) {
    $fileToOpen = $_GET['linku']; // Get the file name from the URL

    // Sanitize the file name to prevent directory traversal attacks
    $fileToOpen = basename($fileToOpen);

    // Check if the file exists before opening
    if (file_exists($fileToOpen)) {
        $i = 0;
        $fjalli = fopen($fileToOpen, 'r');
        $ac = []; // Initialize the array to store CSV data
        while (!feof($fjalli)) {
            $ac[$i] = fgetcsv($fjalli, 1000, ',', '"', '\\'); // Read CSV line by line
            $i++;
        }
        fclose($fjalli);

        // Display the file contents in a form
        for ($i = 0; $i < (count($ac) - 1); $i++) {
            echo "<br>";
            for ($j = 0; $j < count($ac[$i]); $j++) {
                echo '<input name="emri" value="' . htmlspecialchars($ac[$i][$j]) . '">';
            }
            echo "<br>";
            $shuma=$shuma+$ac[$i][3];
        }
      
    echo "<hr>Shuma e pergjuthshme e porosise eshte..................................................................".$shuma;
  }else {
        echo "<p>Error: File does not exist or cannot be accessed.</p>";
    }

}
?>
</div>


<div id="rechts">
<h1>Produktet</h1>
<?php

$i = 0;
$fjalli = fopen('shporta.csv', 'r');
while(! feof($fjalli))
{
    $ab[$i] = fgetcsv($fjalli,1000, ",", '"', '\\');
    $i++;
}
fclose($fjalli);


for ($i = 0; $i < (count($ab)-1); $i++)
{
echo "<br>";
    for ($j = 0; $j < count($ab[$i]); $j++) {

        echo '<form action="editp.php" method="GET"><input  name="emri" value='.$ab[$i][$j].'><input  name="vlera"  type="submit" value="'.$i.$j.'"></form>';
    }
echo "<br>";
}
?>



</div>