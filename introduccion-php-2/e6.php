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
        $dia = isset($_GET["dia"]) ? $_GET["dia"] : rand(1, 7);
        var_dump($dia);

        switch ($dia) {
            case 1:
                echo "<p>Hoy es lunes y quedan 6 dias hasta el proximo domingo</p>";
                break;
            case 2:
                echo "<p>Hoy es martes y quedan 5 dias hasta el proximo domingo</p>";
                break;
            case 3:
                echo "<p>Hoy es miercoles y quedan 4 dias hasta el proximo domingo</p>";
                break;
            case 4:
                echo "<p>Hoy es jueves y quedan 3 dias hasta el proximo domingo</p>";
                break;
            case 5:
                echo "<p>Hoy es viernes y quedan 2 dias hasta el proximo domingo</p>";
                break;
            case 6:
                echo "<p>Hoy es sabado y quedan 1 dias hasta el proximo domingo</p>";
                break;
            case 7:
                echo "<p>Hoy es domingo y quedan 7 dias hasta el proximo domingo</p>";
                break;
            default:
        }
    ?>
</body>
</html>