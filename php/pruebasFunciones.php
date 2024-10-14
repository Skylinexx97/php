<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
    <title>Funciones</title>
</head>
<body>
    <main>
        <?php
            $array = [
                [
                    'nombre' => 'Rex',
                    'especie' => 'Perro',
                    'interacciones' => 15
                ],
                [
                    'nombre' => 'Miau',
                    'especie' => 'Gato',
                    'interacciones' => 8
                ],
                [
                    'nombre' => 'Tweety',
                    'especie' => 'Canario',
                    'interacciones' => 5
                ],
                [
                    'nombre' => 'Nemo',
                    'especie' => 'Pez payaso',
                    'interacciones' => 12
                ],
                [
                    'nombre' => 'Bambi',
                    'especie' => 'Ciervo',
                    'interacciones' => 7
                ],
                [
                    'nombre' => 'Simba',
                    'especie' => 'León',
                    'interacciones' => 10
                ],
                [
                    'nombre' => 'Dumbo',
                    'especie' => 'Elefante',
                    'interacciones' => 20
                ],
                [
                    'nombre' => 'Fluffy',
                    'especie' => 'Conejo',
                    'interacciones' => 18
                ],
                [
                    'nombre' => 'Zorro',
                    'especie' => 'Zorro',
                    'interacciones' => 11
                ],
                [
                    'nombre' => 'Pollo',
                    'especie' => 'Gallina',
                    'interacciones' => 14
                ],
                [
                    'nombre' => 'Gigi',
                    'especie' => 'Gato',
                    'interacciones' => 6
                ],
                [
                    'nombre' => 'Bella',
                    'especie' => 'Perro',
                    'interacciones' => 9
                ],
                [
                    'nombre' => 'Coco',
                    'especie' => 'Loro',
                    'interacciones' => 3
                ],
                [
                    'nombre' => 'Charlie',
                    'especie' => 'Perro',
                    'interacciones' => 5
                ],
                [
                    'nombre' => 'Goldie',
                    'especie' => 'Pez dorado',
                    'interacciones' => 4
                ],
                [
                    'nombre' => 'Lucky',
                    'especie' => 'Perro',
                    'interacciones' => 16
                ]
            ];

            /**
             * Imprime un array de hasta 3 columnas
             */
            function imprimeArrayAsociativoTabla($array) {
                $claves = array_keys($array[0]);
                echo "
                    <table>
                        <tr>
                ";
                foreach ($claves as $clave) {
                    echo "<th>$clave</th>";
                }
                echo "</tr>";
                foreach($array as $elemento) {
                    echo "<tr>";
                    foreach($elemento as $celda) {
                        echo "<td>$celda</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }

            imprimeArrayAsociativoTabla($array);
        ?>
    </main>
    <footer>David Florido</footer>
</body>
</html>