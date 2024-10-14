<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-4</title>
</head>
<body>
    <?php 
        // Comprobar si se ha pasado por la url y si no generar un número aleatorio del 0 al 10
        $nota = isset($_GET["nota"]) ? $_GET["nota"] : rand(0,100) / 10;
        var_dump($nota);

        // Comprobar nota con un operador if 
        echo $nota < 5 ? "suspenso" : ($nota >= 5 && $nota <= 7 ? "aprobado" : ($nota >= 7 && $nota <= 9 ? "notable" : ($nota > 9 ? "sobresaliente" : "nota incorrecta")));
        
        // Comprueba si el numero introducido es entero o decimal independientemente del tipo de dato
        echo $nota == floor($nota) ? "ENTERO" : "DECIMAL";
    ?>
</body>
</html>