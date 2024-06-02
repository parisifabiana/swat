<?php

include 'config.php';
//facciamo i controlli con isset ed empty .... 
if (
    !empty($_POST['titolo']) && !empty($_POST['autore_id']) && !empty($_POST['editore_id']) &&
    !empty($_POST['isbn']) && !empty($_POST['anno']) && !empty($_POST['lingua']) && !empty($_POST['prezzo'])
) {

    $titolo = $_POST['titolo'];
    $autore_id = $_POST['autore_id'];
    $editore_id = $_POST['editore_id'];
    $isbn = $_POST['isbn'];
    $anno = $_POST['anno'];
    $lingua = $_POST['lingua'];
    $prezzo = $_POST['prezzo'];


    $sql = "INSERT INTO libri (autore_id, editore_id, titolo, isbn, anno, lingua, prezzo)
    VALUES ('$autore_id', '$editore_id', '$titolo', '$isbn', '$anno', '$lingua', '$prezzo')";


    if ($conn->query($sql)) {
        //OTTENIAMO L'ID di riferimento
        $libro_id = $conn->insert_id;
        if (isset($_POST['categorie'])) {
            $categorie_selezionate = $_POST['categorie'];
            //cicliamo sull'array $categorie_selezionate
            foreach ($categorie_selezionate as $categoria_id) {
                $sql_categorie = "INSERT INTO libri_categorie(libro_id, categoria_id) VALUES
                ('$libro_id', '$categoria_id')";
                $conn->query($sql_categorie);
            }
        }
        $msg = "ok";
        header("Location: form-libro.php?messaggio=$msg");
        exit();
    } else {
        echo "no";
    }
} else {
    echo "Non hai inserito nessun campo";
}
