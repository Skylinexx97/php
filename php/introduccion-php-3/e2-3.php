<?php 
    $mensaje = "";
    $numero1 = "";
    $numero2 = "";
    $resultado = "";
    // Si el método de envio es post, el array de valores existe y no esta vacío...
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["operacion"])) {
            $numero1 = htmlspecialchars(floatval($_POST["numero1"]));
            $numero2 = htmlspecialchars(floatval($_POST["numero2"]));

            switch($_POST["operacion"]) {
                case "+":
                    $resultado = $numero1 + $numero2;
                    $mensaje = "El resultado de sumar $numero1 con $numero2 es $resultado";
                    break;
                case "-":
                    $resultado = $numero1 - $numero2;
                    $mensaje = "El resultado de restar $numero1 con $numero2 es $resultado";
                    break;
                case "*":
                    $resultado = $numero1 * $numero2;
                    $mensaje = "El resultado de multiplicar $numero1 por $numero2 es $resultado";
                    break;
                case "/":
                    if ($numero2 == 0) {
                        $mensaje = "Operación no válida";
                    }
                    else {
                        $resultado = $numero1 / $numero2;
                        $mensaje = "El resultado de dividir $numero1 con $numero2 es $resultado";
                    }
                    break;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>ejercicio 2-3</title>
</head>
<body>
    <header>
        <h2>Calculadora</h2>
    </header>
    <main>
        <form action="e2-3.php" method="post" name="calculadora">
            <p>
                <label for="numero1">Número 1:</label>
                <input type="number" name="numero1" step="any" placeholder="Introduce el primer número" value="<?=$numero1;?>">
                <label for="numero2">Número 2:</label>
                <input type="number" name="numero2" placeholder="Introduce el primer número" value="<?=$numero2;?>">
            </p>
            <input type="submit" name="operacion" value="+">
            <input type="submit" name="operacion" value="-">
            <input type="submit" name="operacion" value="*">
            <input type="submit" name="operacion" value="/">
        </form>
        <?php
            echo "<p class='notice'>$mensaje</p>";
        ?>
    </main>

    <footer>
        David Florido
    </footer>
        
</body>
</html>
