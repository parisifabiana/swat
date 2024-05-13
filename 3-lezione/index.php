<?php

$base = 6;
$altezza = 10;

$area = $base * $altezza;
echo "$area "; 

$perimetro = 2 * ($base + $altezza);
echo "$perimetro";

?>

<?php

$prezzo = 100.98;
$sconto = 30;

$prezzo_scontato = $prezzo - ($prezzo * $sconto / 100);
echo "il prezzo scontato è " . round($prezzo_scontato,2);
?>

<?php
$numero1 = 50;
$numero2 = 40;

if ($numero1 > $numero2) {
    echo "il maggiore è: $numero1";
} else if($numero1 == $numero2) {
    echo "i numeri sono uguali";
} else {
    echo "il maggiore è $numero2";
}
?>

<?php
$voto = 6;

if($voto >= 9) {
    echo"A";
} else if($voto >= 8) {
    echo "B";
} else if ($voto >= 7) {
    echo "C";
} else if ($voto >= 6) {
    echo "D"; 
} else {
    echo "non sufficiente";
} 

?>

<?php

$numero = 6;
if($numero % 3 == 0) {
    echo "il numero è multiplo di 3";
} else {
    echo "il numero non è multiplo di 3";
}
?>

<?php
    $x= 9;
    $y = 7;
    $z = 12;

    if($x > $y && $x > $z) {
        echo "il maggiore è x";
    } else if ($y > $x && $y > $z ) {
        echo "il maggiore è y";
    } else {
        echo "il maggiore è z";
    }

    echo "\n";
    $massimo = $x;

    if($y > $massimo) {
        $massimo = $y;
    }

    if($z > $massimo) {
        $massimo = $z;
    }
    echo $massimo;

?>

<?php

$num = 60;

if($num >= 50 && $num <= 100) {
    echo "il numero è compreso nelll'intervallo";
} else {
    echo "il numero non è compreso nelll'intervallo";
}
?>

<?php
$anno = 2024;

if (($anno % 400 === 0) || ($anno % 4 === 0 && $anno % 100 !== 0)) {
    echo "anno bisestile";
} else {
    echo "non è bisestile";
}


?>