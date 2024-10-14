<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-1</title>
</head>
<body>
    <?php
        $temperatura = rand(-5, 45);

        echo "La temperatura es $temperatura<br>";

        if ($temperatura >= 30) {
            echo "Hace calor";
        }
        elseif ($temperatura < 15) {
            echo "Hace frío";
        }
        else {
            echo "El clima es templado";
        }
    ?>
</body>
</html>