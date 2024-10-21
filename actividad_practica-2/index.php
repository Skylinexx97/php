<?php
    // Variables
    $formulario = [];
    $errores = [];

    // Funciones

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
                </p>
    
                <!-- Apellidos -->
                <p>
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos">
                </p>
    
                <!-- Fecha de nacimiento -->
                <p>
                    <label for="fec-nac">Fecha de nacimiento</label>
                    <input type="text" name="fec-nac" id="fec-nac">
                </p>
    
                <!-- Checkbox género -->
                <p>
                    <label for="genero">Género</label>
                    <input type="radio" name="genero" id="masculino" value="masculino">Masculino
                    <br>
                    <input type="radio" name="genero" id="femenino" value="femenino">Femenino
                    <br>
                    <input type="radio" name="genero" id="otro" value="otro">Otro
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
                </p>
    
                <!-- Password -->
                <p>
                    <div class="contenedor-password">
                        <div class="password">
                            <label for="password">Contraseña</label>
                            <input type="text" name="password" id="password">
                        </div>
                        <div class="confirmar-password">
                            <label for="confirmPassword">Confirmar password</label>
                            <input type="text" name="confirmPassword" id="confirmPassword">
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
                    <label for="terminosYcondiciones"></label>
                    <input type="checkbox" name="terminosYcondiciones" id="terminosYcondiciones" value="terminosYcondiciones">Acepto los términos y condiciones
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