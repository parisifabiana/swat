<?php

$studente =
    [
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 20
    ];

echo "Nome studente " . $studente["nome"] . " - Età studente: " . $studente["eta"];

foreach ($studente as $key => $item) {
    echo "Chiave: $key -Valore: $item\n";
}

$studente["eta"] = 21;
print_r($studente);

$studente["corso"] = "Informatica";
print_r($studente);

unset($studente["corso"]);
print_r($studente);

$conteggio = count($studente);
echo $conteggio;

ksort($studente);
print_r($studente);

function is_pari($numero)
{
    if ($numero % 2 == 0) {
        return true; /// provoca l'uscita immediata dalla funzione
    }
    return false;
}

$a = 4;
var_dump(is_pari($a));

function is_positive($numero)
{
    if ($numero > 0) {
        return 1;
    } else if ($numero < 0) {
        return 2;
    }
    return 0;
}

$b = -6;
echo is_positive($b);
if (is_positive($b) === 1) {
    echo "numero positivo";
} else if (is_positive($b) === 2) {
    echo "numero negativo";
} else {
    echo "numero nullo";
}

function is_palindroma($parola)
{
    $parola_inversa = strrev($parola);
    return strtolower(trim($parola)) === strtolower(trim($parola_inversa));
}

$parola = "Anna";
if (is_palindroma($parola)) {
    echo "la parola $parola è palindroma";
} else {
    echo " non è palindroma";
}
