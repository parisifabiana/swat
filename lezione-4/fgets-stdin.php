<?php 
echo "Inserisci un dato in input";
$dati = fgets(STDIN);
var_dump($dati);
echo "hai inserito $dati";

//per prendere degli interi usiamo intval

echo "Inserisci un dato in input";
$numero = intval(fgets(STDIN));
var_dump($numero);
echo "hai inserito $numero";

$numero = floatval(fgets(STDIN));
var_dump($numero);
echo "hai inserito $numero";
?>