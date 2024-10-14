
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th, td {
            border: 1px solid black;
            padding: 3px;
            min-width: 100px;
            text-align: center;
        }
        th {
            background-color: #FF000055;
        }
    </style>
    <title>ejercicio-15</title>
</head>
<body>
    <?php 
        /**
         * Función que genera una tabla a partir de un parámetro
         * devuelve una cadena con el html de la tabla
         */
        function generarTabla($num) {
            
            $tabla = "<table>";
            
            $index = 1;
            
            for ($fila = 0; $fila < $num; $fila++) {
                $tabla .= "<tr>";
                for ($columna = 0; $columna < $num; $columna++) {
                    $tabla .= "<td> $index </td>";
                    $index ++;
                }
                $tabla .= "</tr>";
            }
            
            $tabla .= "</table>";
            
            return $tabla;
        }
        
        // Variable para usar con la función
        $num = 3;

        echo generarTabla($num);
    ?>
</body>
</html>