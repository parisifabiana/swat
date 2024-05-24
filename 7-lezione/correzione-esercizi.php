<?php
//1
$media = function ($a, $b, $c) {
    $somma = ($a + $b + $c);
    return $somma / 3; //$somma.length;
};
$a = 14;
$b = 49;
$c = 39;
$risultato = $media($a, $b, $c);

echo $risultato;


echo $media(6, 7, 8);

echo "\n";

//2
$areaDelCerchio = function ($raggio) {
    return pi() * pow($raggio, 2); //phi greca e calcolo del quadrato del raggio
};

$raggio = 5;

echo  number_format($areaDelCerchio($raggio));
echo "\n";

//3

$array = [-10, 2, -3, 4, 0, 15, -6];

$array_positivo = function ($valore) {
    return $valore >= 0;
};

$positivi = array_filter($array, $array_positivo);

print_r($positivi);

echo "\n";

//4
function raddoppia(&$num)
{
    return $num *= 2;
}

$riferimento = 5;
echo raddoppia($riferimento);
echo "\n";

//5

function inserisciElemento(&$array, $elemento)
{
    $array[] = $elemento;
}

$numeri = [0, 1, 2, 3, 4];
inserisciElemento($numeri, 5);

print_r($numeri);

echo "\n";

//6
function sommaIndefinita(...$numeri)
{
    return array_sum($numeri);
}

echo sommaIndefinita(1, 2, 3, 4);

echo "\n";

//7

function quadrati($numeri)
{
    return array_map(
        function ($numero) {
            return $numero * $numero;
        },
        $numeri
    );
}
$numeri = [1, 2, 3, 4, 5];
$quadrati = quadrati($numeri);

print_r($quadrati);

echo "\n";
