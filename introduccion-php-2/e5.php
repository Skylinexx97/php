<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-5</title>
</head>
<body>
    <?php 
        $fruta = "manzana";
        switch ($fruta) {
            case "manzana":
                echo "<p>El color es rojo</p>";
                break;
            case "platano":
                echo "<p>El color es amarillo</p>";
                break;
            case "naranja":
                echo "<p>El color es naranja</p>";
                break;
            default:
                echo "<p>El color no disponible</p>";
        }
    ?>
</body>
</html>