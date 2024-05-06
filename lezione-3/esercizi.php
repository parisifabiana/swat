<?php
$prima = "Oggi mi sono iscritta in palestra";
$seconda = "Domani splenderà il sole";

echo strlen($prima)
. "\n";
echo strlen($seconda)
. "\n";


if (strlen($prima) > strlen($seconda)) {
    echo strlen($prima) . " è maggiore di " . strlen($seconda). "\n";
} else if (strlen($prima) == strlen($seconda)) {
    echo "Le due stringhe sono uguali";
} else {
    echo strlen($seconda) . " è maggiore di " . strlen($prima) . "\n";
}

//2

$str = "Ciao sono io amore mio";
$str_maiuscola = strtoupper($str);

//echo strtoupper($str) . "\n";
echo $str_maiuscola . "\n";

//3 

$frutta = "La mela è rossa";

echo str_replace('mela', 'fragola', $frutta) . "\n";

?>

<?php
//1

 for($i = 1; $i <= 5; $i++) {
    echo ($i * 10) .  "\n";
 };

 for($i = 10; $i <= 50; $i++) {
    echo $i .  "\n";
 };

$i = 1;

while ($i <= 5) {
    echo ($i * 10) . " ";
    $i++;
};

?>

<?php
//2

for($i = 1; $i <= 100; $i+=2) {
    echo $i . " ";
}
//OR
for($i = 1; $i <= 100; $i++) {
    if($i % 2 !== 0) {
        echo $i . " ";
    }
}

// con il while 
$i = 1;
while($i < 100) {
    echo ($i+=2) . " ";
    $i++;
}

?>

<?php
//3

for($i = 3; $i <= 30; $i+=3) {
    echo $i . " ";
}
//OR
for($i = 0; $i <=10; $i++) {
    echo "(3 * $i) = ". 3 * $i . "\n";
}

$i = 3;
while ($i<=30) {
    echo $i . " ";
    $i+=3;
}

?>

<?php
//4

for($i = 30; $i <= 60; $i+=2) {
    echo $i .  "\n";
 };

$i = 30;
while ($i <= 60) {
    echo $i .  "\n";
    $i+=2;
}

?>

<?php
//5
$somma = 0;
for($i = 10; $i <= 20; $i++) {
    $somma = $somma + $i;
}

echo $somma;


?>

<?php 
//6
$prodotto = 1;
for($i = 1; $i <= 10; $i++) {
    //$prodotto = $prodotto * $i;
    $prodotto *= $i;
}

echo $prodotto;
?>

<?php 
$animali = ['cane', 'gatto', 'maiale', 'mucca'];

var_dump($animali[1]);
print_r($animali);
echo $animali[0] . "\n";

$lunghezza_animali = count($animali);
echo $lunghezza_animali . "\n";

echo $animali[$lunghezza_animali - 1];

$animali[] = "leone";
var_dump($animali);
?>

<?php 
$piante = ['rosa', 'tulipano', 'orchidea'];

for($i = 0; $i < count($piante); $i ++) {
    echo $piante[$i] . "\n";
}
?>
