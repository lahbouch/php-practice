<?php
$counter = fopen("compteur.txt","r");
$visitnum = fgets($counter);
$visitnum = $visitnum + 1;
fseek($counter,0);
fwrite($counter,$visitnum);
fclose($counter);
echo "This site have $visitnum visitors";
?>