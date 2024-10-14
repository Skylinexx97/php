<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-2</title>
</head>
<body>
    <?php 
        // Comprobar si se ha pasado por la url
        $dia = $_GET["dia"];
        if (isset($_GET["dia"])) {
            if ($dia>=1&& $dia<=7) {
                if ($dia>=1&&$dia<=5) {
                    echo "El día es laborable";
                }
                else {
                    echo "Es fin de semana";
                }
            }
        }
        else {
            $dia = rand(1,7);
            if ($dia>=1&& $dia<=7) {
                if ($dia>=1&&$dia<=5) {
                    echo "El día es laborable";
                }
                else {
                    echo "Es fin de semana";
                }
            }
        }
    ?>
</body>
</html>