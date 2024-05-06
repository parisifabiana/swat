<?php
$nomi = ['pippo', 'pluto'];

$nomi_array = array('pippo', 'pluto');

//funzioni principali
//in_array verifica se un elemento è presente nell'array se è presente restituisce true, altrimenti false.

$trovato = in_array('pluto', $nomi);
var_dump($trovato);

//array_search verifica se un elemento è presente nell'array se è presente restituisce il valore di index(int(1)), altrimenti false

$found = array_search('pluto', $nomi);
var_dump($found);

//array_reverse - inverte l'array
$numeri = [1, 5, 9];
$numeri_invertito = array_reverse($numeri);
var_dump($numeri_invertito);

//array_unique - toglie i duplicati
$numeri = [1,2,2,6];
$numeri_unici = array_unique($numeri);
print_r($numeri_unici);

?>