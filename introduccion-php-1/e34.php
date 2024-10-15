<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-34</title>
</head>
<body>
    <!-- Crear un array con tres cadenas, luego eliminar uno con el método unset -->
    <?php
        echo "<p>Crear array de animales:</p>";
        $animales = ["gato", "perro", "loro"];

        // Imprimir el array por pantalla
        echo print_r($animales). "<br>";

        echo "<p>Eliminar perro e imprimir con unset:</p>";

        // Eliminar el elemento perro
        unset($animales[1]);

        // Imprimir el array de nuevo
        echo print_r($animales). "<br>";

        echo "<p>Imprimir el número de valores del array con count:</p>";

        // Imprimir el número de elementos del array
        echo count($animales). "<br>";

        echo "<p>Imprimir los valores del array con var_dump:</p>";

        echo var_dump($animales)
    ?>
</body>
</html>