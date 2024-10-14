<?php
    if (isset($_GET['convertir'])) {
        if (isset($_GET['celsius']) && !empty($_GET['celsius'])) {

            $celsius = $_GET['celsius'];

            $fahrenheit = ($celsius * 9/5) + 32;
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>ejercicio</title>
</head>
<body>
    <header>
        <h2>Conversor C a F</h2>
    </header>
    <main> 
        <p class="notice">
            <?php
                if (empty($_GET['celsius']) || empty($fahrenheit)) {
                    echo "No se ha podido realizar la conversión";
                } else {
                    echo "$celsius celsius son $fahrenheit fahrenheit"; 
                }
            ?>
            <a href="e1-3.php">Volver</a>
        </p>
    </main>

    <footer>
        David Florido
    </footer>
        
</body>
</html>