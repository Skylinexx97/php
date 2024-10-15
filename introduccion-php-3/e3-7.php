<?php
    $tareas = [];
    $mensaje = "<p>No hay ninguna tarea.</p>";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["enviar"])) {
        $tareas[] = isset($_GET["tarea"]) && empty($_GET["tarea"]) ? $_GET["tarea"] : "";
        $tareas[] = unserialize($_GET["oculto"]);
        $oculto = serialize($tareas);
    }
    

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>ejercicio 3-7</title>
</head>
<body>
    <h3>Gestor de tareas</h3>
    <main>
        <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>" method="get">
            <p>
                <label for="tarea">Tarea</label>
                <input type="text" name="tarea">
                <input type="hidden" name="oculto" value="<?php echo serialize(htmlspecialchars($oculto))?>">
            </p>
            <input type="submit" name="enviar" value="Guardar">
        </form>
        <h4>Lista de tareas: </h4>
        <ol>
            <?php
            ?>
        </ol>
        <?php
            if (!empty($mensaje)) {
                echo $mensaje;
            }
        ?>
    </main>
    <footer>
        David Florido
    </footer>
        
</body>
</html>