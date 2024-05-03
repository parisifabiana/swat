<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ciao</h1>
    <p>
        <?php
            echo "Hello world! <br>";

            $nome = "Pippo";
            echo $nome;

            $eta = 20;
            echo $eta; 

            echo "Ciao sono $nome e ho $eta anni <br>";
            echo 'Ciao sono ' . $nome . 'e ho' . $eta . 'anni <br>';

            echo phpversion();
        ?>
    </p>
</body>

</html>