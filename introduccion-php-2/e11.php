<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
    </style>
    <title>ejercicio-8</title>
</head>
<body>
    <?php 
        $estudiantes = ["David", "Paco", "Antonio"];
        $contador = 0;
        while ($contador < count($estudiantes)) {
            echo "Estudiante ".($contador + 1). ": ". $estudiantes[$contador]. "<br>";
            $contador ++;
        }
    ?>
</body>
</html>