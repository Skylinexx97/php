<?php
    // Variables
    // Creo un array que contendrá todos los valores recogidos del formulario
    $formulario = [];
    // Creo un array con aquellos campos que son obligatorios
    $camposObligatorios = ["nombre", "apellidos", "fecha de nacimiento", "genero", "email", "contraseña", "confirmar contraseña", "terminos y condiciones"];
    // Creo un array que contendrá los posibles mensajes de error que puedan ocurrir
    $errores = [];
    // Estilo para los errores
    $errorStyle = "color: red;";

    // Funciones

    /**
     * Devuelve la cadena sanitizada
     */
    function test_input($string) {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    /**
     * Limpia todos los campos del formulario
     */
    function limpiarFormulario() {
        header("Location: ". $_SERVER['PHP_SELF']);
        exit;
    }

    /**
     * Esta función recoge todos los valores posibles del formulario en un array y
     * lo devuelve
     */
    function obtenerDatos() {
        // Creo array para los valores del formulario 
        $formulario = [
            "nombre" => "",
            "apellidos" => "",
            "fecha de nacimiento" => "",
            "genero" => "",
            "curso" => "",
            "preferencias" => [
                "deportes" => "",
                "musica" => "",
                "viajes" => ""
            ],
            "email" => "",
            "contraseña" => "",
            "confirmar contraseña" => "",
            "comentarios" => "",
            "terminos y condiciones" => ""
        ];

        // Recorro el array, sanitizo los valores y los añado al array
        foreach ($formulario as $clave => $valor) {

            if (is_array($formulario[$clave])) {
                foreach ($formulario[$clave] as $clave2 => $valor2) {
                    $formulario[$clave][$clave2] = isset($_POST["$clave2"]) && !empty($_POST["$clave2"]) ? $_POST["$clave2"] : "";
                    $formulario[$clave][$clave2] = test_input($formulario[$clave][$clave2]);
                }
            } else {
                // Añado el dato si existe y no esta vacío, y si no añado cadena vacía
                $formulario[$clave] = isset($_POST["$clave"]) && !empty($_POST["$clave"]) ? $_POST["$clave"] : "";
                // Sanitizo el dato
                $formulario[$clave] = test_input($formulario[$clave]);
            }
        }
        return $formulario;
    }

    /**
     * Esta función comprueba que los campos obligatorios del array con los datos
     * del formulario no estan vacíos y son correctos. Si son correctos no devolverá nada,
     * por el contrario devolverá un array con todos los errores encontrados
     */
    function checkCamposObligatorios($formulario, $camposObligatorios) {
        //Creo el array de errores
        $errores = [];

        // Recorro el array de campos obligatorios y compruebo si están vacíos
        foreach ($camposObligatorios as $campo) {
            // Añado un error si el campo esta vacío
            $errores[$campo] = empty($formulario[$campo]) ? "El campo $campo es obligatorio" : "";
        }

        return $errores;
    }


    // Main
    // Compruebo que el método de envio es post
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
        if (isset($_POST["limpiar"])) { // Si el botón pulsado es el de limpiar
            limpiarFormulario();
        } else if (isset($_POST["enviar"])) { // Si el boton pulsado es el de enviar

            // Obtengo los datos del formulario
            $formulario = obtenerDatos();
            // Compruebo que no existan errores
            $errores = checkCamposObligatorios($formulario, $camposObligatorios);

            if (empty($errores)) { // Si errores esta vacío significa que el formulario se ha rellenado correctamente

            }
        }
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <style>
        .contenedor-password {
            display: flex;
            gap: 50px;
        }

        form input {
            width: 100%;
        }
    </style>
    <title>Práctica 2</title>
</head>
<body>
    <header>
        <h1>Formulario de usuario</h1>
    </header>
    <main>
        <form action="" method="post">
            <p>
                <!-- Nombre -->
                <p>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre">
                    <?php
                        echo empty($errores["nombre"]) ? "" : "<span style='$errorStyle'>{$errores['nombre']}</span>";
                    ?>
                </p>
    
                <!-- Apellidos -->
                <p>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">
                    <?php
                        echo empty($errores["apellidos"]) ? "" : "<span style='$errorStyle'>{$errores['apellidos']}</span>";
                    ?>
                </p>
    
                <!-- Fecha de nacimiento -->
                <p>
                    <label for="fecha de nacimiento">Fecha de nacimiento</label>
                    <input type="text" name="fecha de nacimiento" id="fecha de nacimiento">
                    <?php
                        echo empty($errores["fecha de nacimiento"]) ? "" : "<span style='$errorStyle'>{$errores['fecha de nacimiento']}</span>";
                    ?>
                </p>
    
                <!-- Checkbox género -->
                <p>
                    <label for="genero">Género</label>
                    <input type="radio" name="genero" id="masculino" value="masculino">Masculino
                    <br>
                    <input type="radio" name="genero" id="femenino" value="femenino">Femenino
                    <br>
                    <input type="radio" name="genero" id="otro" value="otro">Otro
                    <?php
                        echo empty($errores["genero"]) ? "" : "<span style='$errorStyle'>{$errores['genero']}</span>";
                    ?>
                </p>
                <hr>
    
                <!-- Curso -->
                <p>
                    <label for="curso">Curso</label>
                    <select name="curso" id="curso">
                        <option value="DAW">DAW</option>
                        <option value="DAM">DAM</option>
                        <option value="SMR">SMR</option>
                    </select>
                </p>
    
                <!-- Preferencias -->
                <p>
                    <label for="preferencias">Preferencias</label>
                    <input type="checkbox" name="deportes" id="deportes">
                    <label for="deportes">Deportes</label>
                    <input type="checkbox" name="musica" id="musica">
                    <label for="musica">Música</label>
                    <input type="checkbox" name="viajes" id="viajes">
                    <label for="viajes">Viajes</label>
                </p>
                <hr>
    
                <!-- Email -->
                <p>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                    <?php
                        echo empty($errores["genero"]) ? "" : "<span style='$errorStyle'>{$errores['genero']}</span>";
                    ?>
                </p>
    
                <!-- Password -->
                <p>
                    <div class="contenedor-password">
                        <div class="password">
                            <label for="contraseña">Contraseña</label>
                            <input type="text" name="contraseña" id="contraseña">
                            <?php
                                echo empty($errores["contraseña"]) ? "" : "<span style='$errorStyle'>{$errores['contraseña']}</span>";
                            ?>
                        </div>
                        <div class="confirmar-password">
                            <label for="confirmar contraseña">Confirmar contraseña</label>
                            <input type="text" name="confirmar contraseña" id="confirmar contraseña">
                            <?php
                                echo empty($errores["confirmar contraseña"]) ? "" : "<span style='$errorStyle'>{$errores['confirmar contraseña']}</span>";
                            ?>
                        </div>
                    </div>
                </p>
    
                <!-- Comentario -->
                <p>
                    <label for="comentarios">Comentarios</label>
                    <textarea name="comentarios" id="comentarios"></textarea>
                </p>
    
                <!-- Aceptar términos y condiciones -->
                <p>
                    <label for="terminos y condiciones"></label>
                    <input type="checkbox" name="terminos y condiciones" id="terminos y condiciones" value="terminos y condiciones">Acepto los términos y condiciones
                    <?php
                        echo empty($errores["terminos y condiciones"]) ? "" : "<span style='$errorStyle'>{$errores['terminos y condiciones']}</span>";
                    ?>
                </p>
                <hr>
            </p>
    
            <!-- Botones -->
             <input type="submit" name="enviar" value="Enviar">
             <input type="submit" name="limpiar" value="Limpiar">
        </form>
    </main>
</body>
</html>