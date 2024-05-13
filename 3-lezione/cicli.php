<!-- stampare 10 numeri -->
<?php
for($i = 0; $i <= 10; $i++) {
 echo "$i" .  "\n";
}

// stampare i numeri da 10 a 1

for($i = 10; $i > 0; $i--) {
    echo "$i" .  "\n";
}

// stampare i numeri pari da 0 a 10

for($i = 0; $i <= 10; $i+=2) {
    echo $i . " ";
}

// con il while 
while($i < 10) {
    echo $i . " ";
    $i++;
}

$numeri = [8, 13, '6', 9, 20, 22]; //array di numeri

$lunghezza = count($numeri) - 1;
echo $lunghezza;
var_dump($numeri);
print_r($numeri);


for($i = 0; $i < count($numeri); $i++) {
    echo "indice $i elemento $numeri[$i] \n";
}

$frutta = [];
$frutta[] = "Mela";
$frutta[] = "Arancia";
var_dump($frutta)



?>