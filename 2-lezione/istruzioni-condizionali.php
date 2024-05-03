<?php

    $numero = 0;

    // if($numero > 0) {
    //     echo "Il numero è positivo";
    // } else {
    //     echo "il numero non è positivo";
    //     if($numero == 0) {
    //         echo "il numero è nullo";
    //     } else {
    //         echo "il numero è negativo";
    //     }
    // }

    if($numero > 0) {
        echo "il numero è positivo";
    } else if($numero == 0) {
        echo "il numero è nullo";
    } else {
        echo "il numero è negativo";
    }

    //verifare se un numero è pari o dispari:

        $a = 7;

        // if($a % 2 == 0) {
        //     echo "il numero è pari";
        // } else {
        //     echo "il numero è dispari";
        // }

        if($a % 2 != 0) {
            echo "il numero è dispari";
        } else {
            echo "il numero è pari";
        }

?>