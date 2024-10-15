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
    <title>ejercicio-13</title>
</head>
<body>
    <?php 
        $aprobados = 0;
        $notaMasAlta = 0;
        $notaMasBaja = 10;

        // Crear array asociativo
        $array = [
            "David" => 10,
            "Paco" => 3,
            "Antonio" => 6
        ];
        echo "<table>";
        foreach($array as $nombre => $nota) {
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$nota</td>";
            echo "</tr>";
            if ($nota >= 5) {
                $aprobados ++;
            }
            if ($nota > $notaMasAlta) {
                $notaMasAlta = $nota;
            }
            if ($nota < $notaMasBaja) {
                $notaMasBaja = $nota;
            }
        }
        echo "<tr>";
        echo "<td>Numero de aprobados</td>";
        echo "<td>$aprobados</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nota más alta</td>";
        echo "<td>$notaMasAlta</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nota más baja</td>";
        echo "<td>$notaMasBaja</td>";
        echo "</tr>";
        echo "</table>";
    ?>
</body>
</html>