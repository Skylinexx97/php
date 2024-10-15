<?php
    $numero = "";
    function tablaDeMultiplicar($numero) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["numero"]) && !empty($_POST["numero"])) {
                $mensaje = "";
                $numero = htmlspecialchars(intval($_POST["numero"]));
                for ($i = 0; $i <= 10; $i++) {
                    $mensaje .= "<p>" . $numero . " * " . $i . " = " . ($numero * $i) . "</p>";;
                }
                return $mensaje;
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
    <title>ejercicio 3-6</title>
</head>
<body>
    <h3>Crea un formulario que solicite al usuario un número del 1 al 10. Al enviar el formulario, muestra la tabla de multiplicar de ese número.</h3>
    <main>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <label for="numero">Introduce un número: </label>
            <input type="number" name="numero" min="0" step="1" require value="<?=$numero;?>">
            <input type="submit" value="Calcular">
        </form>
        <?php
            $mensaje = tablaDeMultiplicar($numero);
            echo $mensaje;
        ?>
    </main>
    <footer>
        David Florido
    </footer>
        
</body>
</html>