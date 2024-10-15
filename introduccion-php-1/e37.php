<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-37</title>
</head>
<body>
    <?php
        echo "<p>Crear una cadena e imprimirla:</p>";
        
        $string = "PHP es un lenguaje divertido y poderoso";

        echo "$string<br>";

        echo "<p>Reemplazamos la palabra divertido por fácil con str_replace. Tambien se pueden reemplazar varios valores en la misma función en forma de arrays:</p>";

        $string = str_replace("divertido", "fácil", $string);

        echo "$string<br>";
    ?>
</body>
</html>