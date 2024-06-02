<?php
//operatore ternario, si usa al posto degli if
// sintassi: condizione ? valore_se_vera : valore_se_falsa
//Esempio:

$eta = 20;

$messaggio = ($eta >= 18) ? "maggiorenne" : "minorenne";
echo $messaggio;

if ($eta >= 18) {
    echo "maggiorenne";
} else {
    echo "minorenne";
};
