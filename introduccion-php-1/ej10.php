<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-10</title>
</head>
<body>
    <!-- Usos del método var_dump() -->
    <?php
        $nombre = "David";
        $edad = 27;
        $fumador = FALSE;
        $peso = 81.97;

        var_dump($nombre);
        echo "<br>";
        var_dump($edad);
        echo "<br>";
        var_dump($fumador);
        echo "<br>";
        var_dump($peso);

        // Podemos machacar las variables con un nuevo valor
        $edad = 17.6;
        $nombre = 22;
        $fumador = "No fuma";
        $peso = 0x101;

        echo "<br>";
        var_dump($nombre);
        echo "<br>";
        var_dump($edad);
        echo "<br>";
        var_dump($fumador);
        echo "<br>";
        var_dump($peso);
    ?>
</body>
</html>