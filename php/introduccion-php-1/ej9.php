<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-9</title>
</head>
<body>
    <!-- Operaciones simples -->
    <?php
        $numero1 = 10;
        $numero2 = 4.13;
        // Podemos hacer casting para convertir el segundo número a entero
        $suma = $numero1 + (int)$numero2;
        echo "<h2>$numero1 más $numero2 es $suma</h2>";
    ?>
</body>
</html>