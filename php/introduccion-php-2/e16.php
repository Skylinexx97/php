<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>ejercicio-16</title>
</head>
<body>
    <?php 
        // ## Funciones ## //
        
        /**
         * Valida que las notas sean correctas
         * y devuelve true o false.
         */
        function validarNotas($notas) {
            global $aprobados;
            global $suspensos;
            foreach ($notas as $nota) {
                if ($nota < 0 || $nota > 10) {
                    return false;
                }
                if ($nota >= 5) {
                    $aprobados ++;
                }
                else {
                    $suspensos ++;
                }
            }
            return true;
        }

        /**
         * Calcula la media de las notas 
         * contenidas en un array y devuelve
         * la media.
         */
        function calcularMedia($notas) {

            $suma = 0;

            foreach ($notas as $nota) {
                $suma += $nota;
            }

            return $suma / count($notas);
        }

        // ## Main ## //

        if (isset($_GET["notas"]) && !empty($_GET["notas"])) {
            $notas = explode(",", $_GET["notas"]);
            $aprobados = 0;
            $suspensos = 0;
    
            if (!validarNotas($notas)) { // si no son válidas
                echo "<p>Las notas tienen que estar entre 0 y 10</p>";
            }
            else { // si son válidas
                $media = calcularMedia($notas);
                echo $media >= 5 ? "<p>El grupo ha aprobado, $aprobados alumnos han aprobado y $suspensos han suspendido</p>" : "<p>El grupo ha suspendido, $aprobados alumnos han aprobado y $suspensos han suspendido</p>";
            }
        }
        else {
            echo "<p>No se han pasado notas por la url</p>";
        }
    ?>
</body>
</html>