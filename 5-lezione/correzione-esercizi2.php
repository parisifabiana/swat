
<?php
$frutta = ['fragole', 'banane', 'kiwi'];
$fragole = array_search('fragole', $frutta);
if (in_array('fragole', $frutta)) {
    echo "che bello posso fare la macedonia!";
} else {
    echo "Niente macedonia oggi";
}
?>

<?php

$numeri = [];

for ($i = 0; $i < 10; $i++) {
    $numeri[] = intval(trim(fgets(STDIN)));
}
print_r($numeri);
?>