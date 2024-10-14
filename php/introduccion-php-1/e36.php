<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-36</title>
</head>
<body>
    <?php
        echo "<p>Crear una cadena e imprimir la longitud:</p>";
        
        $string = "DaVid";

        echo "$string<br>";
        echo strlen($string). "<br>";

        echo "<p>Pasar la cadena a minúscula:</p>";

        $string = strtolower($string);
        echo "$string<br>";
        echo strlen($string). "<br>";

        echo "<p>Pasar la cadena a mayúsculas:</p>";

        $string = strtoupper($string);
        echo "$string<br>";
        echo strlen($string). "<br>";
    ?>
</body>
</html>