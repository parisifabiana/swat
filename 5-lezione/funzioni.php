<?php
//funzione senza return e senza argomento
saluta();

function saluta()
{
    echo "\nciao a tutti";
}
//funzione senza return e con argomento, anche di default
function saluto($nome)
{
    echo "\nciao da $nome";
}

saluto('Pippo');

$paperino = "Paperino";
saluto($paperino);

//funzione con return
echo "\n";
function somma($num1, $num2)
{
    return $num1 + $num2;
}

$risultato = somma(6, 7);
echo $risultato;
