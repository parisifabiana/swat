<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {   
    if((isset($_POST['base'])) && (isset($_POST['altezza']))) {
    $base = $_POST['base']; // INSERISCO IL VALORE NEL NAME=""
    $altezza = $_POST['altezza']; 
    $area= $base * $altezza;
    echo $area;
    } else {
        echo "non hai inserito i dati";
    }
}
?>