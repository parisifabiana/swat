<?php

//var_dump($_SERVER);

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // var_dump($_POST['name']);
//     // echo $_POST['name'];

//     if ((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['messaggio']) && !empty($_POST['messaggio']))) {
//         $nome = $_POST['name'];
//         echo "ok - $nome hai inviato il messaggio";
//     } else {
//         echo "devi inserire tutti i dati";
//     }
//}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $avviso = "";
    $errore = false;

    if ((!isset($_POST['name']) || empty($_POST['name']))) {
        $errore = true;
        $avviso .= "errore nel campo nome";
    }
    if ((!isset($_POST['email']) || empty($_POST['email']))) {
        $errore = true;
        $avviso .= "errore nel campo email";
    }
    if ((!isset($_POST['messaggio']) || empty($_POST['messaggio']))) {
        $errore = true;
        $avviso .= "errore nel campo messaggio";
    }
    if (!$errore) {
        echo "Benvenuto utente" . $_POST['name'];
    } else {
        echo $avviso;
    }

    //var_dump($errore);

}
