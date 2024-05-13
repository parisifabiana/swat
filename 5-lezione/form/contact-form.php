<?php

//var_dump($_SERVER);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_POST['name']);
    // echo $_POST['name'];

    if ((isset($_POST['name']) && !empty($_POST['name'])) && (isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['messaggio']) && !empty($_POST['messaggio']))) {
        $nome = $_POST['name'];
        echo "ok - $nome hai inviato il messaggio";
    } else {
        echo "devi inserire tutti i dati";
    }
}
