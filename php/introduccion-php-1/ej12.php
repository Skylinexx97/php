<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-12</title>
</head>
<body>
    <!-- Función isset() -->
    <?php
        $variable = "Hola";

        // Esta función sirve para saber si una variable esta inicializada
        // devuelve 0 o 1
        echo isset($variable);

        // Es frecuente utilizarlo en un condicional
        if (isset($variable)) {
            echo "La variable está iniciada";
        }

        // NO ES LO MISMO NO INCIALIZADA QUE NULO
    ?>
</body>
</html>