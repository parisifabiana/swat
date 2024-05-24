<?php
include 'config.php';

$libro_id = $_GET['id'];
$query_libro = "SELECT * from libri where id=$libro_id";
$result_libro = $conn->query($query_libro);

if ($result_libro->num_rows == 1) {
    $row = $result_libro->fetch_assoc();
    $titolo = $row['titolo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'partials/menu.html' ?>
    <h2>Modifica libro</h2>

    <form action="modifica-libro.php" method="post">
        <div>
            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" value="<?php echo $titolo ?>">
        </div>
    </form>
</body>

</html>