<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-35</title>
</head>
<body>
    <?php
        echo "<p>Crear dos arrays e imprimirlos:</p>";
        
        $animales = ["gato", "perro", "loro"];
        $colores = ["rojo", "verde", "negro"];

        // Imprimir el array por pantalla
        echo var_dump($animales). "<br>";
        echo var_dump($colores). "<br>";

        echo "<p>Unir ambos arrays en uno e imprimir con array_merge:</p>";

        $arrayUnido = array_merge($animales, $colores);

        // Imprimir el array nuevo
        echo var_dump($arrayUnido). "<br>";

        // Imprimir array forma alternativa

        echo "<p>Imprimir contenido con foreach:</p>";

        foreach ($arrayUnido as $elemento) {
            echo "$elemento<br>";
        }

    ?>
</body>
</html>