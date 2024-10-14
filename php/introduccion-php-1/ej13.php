<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio-13</title>
</head>
<body>
    <!-- Función empty() -->
    <?php
        $var1 = "";
        $var2 = 0;
        $var3 = null;
        $var4 = "Hola";

        echo "comprobamos var1 ". empty($var1). "<br>";
        echo "comprobamos var2 ". empty($var2). "<br>";
        echo "comprobamos var3 ". empty($var3). "<br>";
        echo "comprobamos var4 ". empty($var4). "<br>";

        // Devuelve 0 o 1 dependiendo de si la variable contiene el elemento vacío 
        // por defecto o cualquier otro valor

    ?>
</body>
</html>