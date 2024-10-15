<?php

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>ejercicio 3-3</title>
</head>
<body>
    
    <main>
        <form action="" method="get">
            <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" size="20" placeholder="Nombre del empleado" required>
                <label for="apellido">Apellidos:</label>
                <input type="text" name="apellido" id="apellido" size="40" placeholder="Apellidos del empleado" required>
            </p>
            <input type="submit" name="enviar" value="Enviar">
        </form>
    </main>

    <footer>
        David Florido
    </footer>
        
</body>
</html>