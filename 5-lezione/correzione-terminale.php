 <?php
    // empty da true per 0, 0.0, false, array[], ", stringa vuota, null
    // $var = 0;
    // if (empty($var)) {
    //     echo "variabile vuota";
    // }
    // if (isset($variabile)) {
    //     echo "è settata";
    // } else {
    //     echo "non è settata";
    // }

    // if (is_null($variabile)) {
    //     echo "la variabile è nulla";
    // } else {
    //     echo "non è nulla";


    //switch case
    echo "inserisci il primo numero:";
    $numero1 = intval(trim(fgets(STDIN)));

    echo "inserisci il secondo numero:";
    $numero2 = intval(trim(fgets(STDIN)));

    echo "inserisci l'operatore";
    $operatore = intval(trim(fgets(STDIN)));

    switch ($operatore) {
        case '+':
            echo "somma: " . ($numero1 + $numero2);
            break;
        case '-';
            echo "differenza: " . ($numero1 - $numero2);
            break;
        case '*';
            echo "prodotto " . ($numero1 * $numero2);
            break;
        case '/';
            if ($numero2 != 0) {
                echo "divisione " . ($numero1 / $numero2);
            } else {
                echo "non possiamo dividere";
            }
            break;
        default:
            echo "hai inserito un carattere non valido";
    }
