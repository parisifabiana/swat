<?php

$array = range(1, 10);
print_r($array);

/*for ($i = 0; $i < count($array); "$i++") {
    if ($array[$i] % 2 === 0) {
        $somma += $array[$i];
    }
}
echo $somma;*/

//foreach
$sum = 0;
foreach ($array as $elemento) {
    if ($elemento % 2 == 0) {
        $sum += $elemento;
    }
}
echo $sum;
//$numeri = ['10', '4', '16', '7', '9', '2', '87', '32', '18', '5'];
//$somma = 0;
// for($i = 0; $i < count($numeri); $i ++) {
//     if ($numeri[$i] % 2 !== 0) {
//      $somma = $somma + $numeri[$i];
//     } else {
//     "";
//     }
// }

// while ($numeri[$i] % 2 !== 0) {
//    $somma = $somma + $numeri[$i];
// }
// print_r($somma);
