<?php
    $estilos_literarios = [
        'Narrativo' => [
            'Había una vez en un reino muy lejano...',
            'El héroe se lanzó a la batalla sin dudarlo...',
            'Aquella noche, el viento silbaba entre los árboles...'
        ],
        'Poético' => [
            'El viento susurra, la luna brilla...',
            'Entre el mar y la arena, danzan las estrellas...',
            'La vida es un suspiro, un breve instante...'
        ],
        'Ensayo' => [
            'El arte es una manifestación de la cultura humana...',
            'La historia nos enseña que la repetición de errores es común...',
            'La tecnología ha transformado nuestra sociedad en múltiples formas...'
        ]
    ];
    $fondo = "";    
    $fuente = "";    
    $estilo = "";    
    $mensaje = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fondo = isset($_POST["fondo"]) ? htmlspecialchars($_POST["fondo"]) : "";
        $fuente = isset($_POST["fuente"]) ? htmlspecialchars($_POST["fuente"]) : "";
        $estilo = isset($_POST["estilo"]) ? htmlspecialchars($_POST["estilo"]) : "";

        $frase = $estilos_literarios[$estilo][array_rand($estilos_literarios[$estilo])];

        $mensaje = "<p style='background-color:{$fondo}; font-family:{$fuente};'>{$frase}</p>";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>ejercicio 5-3</title>
</head>
<body>
    
    <main>
        <form action="" method="post">
            <p>
                <label for="fondo">Color de fondo</label>
                <select name="fondo" id="fondo">
                    <option value="rgba(255, 0, 0, 0.507)" <?php echo($fondo === "rgba(255, 0, 0, 0.507)" ? "selected" : "")?>>Rojo</option>
                    <option value="rgba(0, 0, 255, 0.466)" <?php echo($fondo === "rgba(0, 0, 255, 0.466)" ? "selected" : "")?>>Azul</option>
                    <option value="rgba(0, 128, 0, 0.425)" <?php echo($fondo === "rgba(0, 128, 0, 0.425)" ? "selected" : "")?>>Verde</option>
                </select>
                <label for="fuente">Tipo de fuente</label>
                <select name="fuente" id="fuente">
                    <option value="Arial" <?php echo($fuente === "Arial" ? "selected" : "")?>>Arial</option>
                    <option value="Verdana" <?php echo($fuente === "Verdana" ? "selected" : "")?>>Verdana</option>
                    <option value="Courier" <?php echo($fuente === "Courier" ? "selected" : "")?>>Courier</option>
                </select>
                <label for="estilo">Tipo de estilo</label>
                <select name="estilo" id="estilo">
                    <option value="Narrativo" <?php echo($estilo === "Narrativo" ? "selected" : "")?>>Narrativo</option>
                    <option value="Poético" <?php echo($estilo === "Poético" ? "selected" : "")?>>Poético</option>
                    <option value="Ensayo" <?php echo($estilo === "Ensayo" ? "selected" : "")?>>Ensayo</option>
                </select>
            </p>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <?php
            echo $mensaje;
        ?>
    </main>

    <footer>
        David Florido
    </footer>
        
</body>
</html>