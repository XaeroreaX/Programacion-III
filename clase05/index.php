<?php

$file = fopen("miArchivo.txt", "a+");
$nombre = $_REQUEST;



fwrite($file,"". $nombre." abrio el archivo a las ". date("d/m/Y h:i.s"). "\n");

echo "<h3>";
rewind($file);
while(!feof($file))
{
    

    echo fgets($file, 100). "<br>";

}
    
echo "</h3>";


fclose($file);

?>
