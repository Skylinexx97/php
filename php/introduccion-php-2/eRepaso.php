<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/simpledotcss/simple.min.css">
    <title>ejercicio</title>
</head>
<body>
    
    <main>
        <?php 
            $animales = [
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

            function registrarInteraccion(&$animales, $nombre) {
                if (!empty($animales)) {
                    $encontrado = false;
                    foreach ($animales as &$animal) {
                        if ($nombre == $animal['nombre']){
                            $animal['interacciones']++;
                            echo "<p>Se ha encontrado el animal ". "{$animal["nombre"]}". "y ahora tiene ". "{$animal['interacciones']}". " interacciones";
                            $encontrado = true;
                            break;
                        }
                    }
                    if (!$encontrado) {
                        echo "<p>No existe ese animal</p>";
                    }
                }
                else {
                    echo "<p>El array esta vacío</p>";
                }
            }

            function animalMasInteractivo($animales) {
                $interacciones =  array_column($animales, "interacciones");
                $maxInteracciones = max($interacciones);
                $animalesMasInteractivos = [];
                foreach ($animales as $animal) {
                    if ($animal["interacciones"] == $maxInteracciones) {
                        array_push($animalesMasInteractivos, $animal["nombre"]);
                    }
                }
                echo "<p>Los animales más interactivos son: ";
                foreach ($animalesMasInteractivos as $animal) {
                    echo "$animal ";
                }
                echo ".</p>";
            }

            function promedioInteraccionesPorEspecies($animales) {
                $especies = array_column($animales, "especie");
                $especies = array_unique($especies);
                foreach($especies as $especie) {
                    echo "<p>La especie $especie tiene una media de ";
                    $interacciones = 0;
                    $contador = 0;
                    foreach($animales as $animal) {
                        if ($animal["especie"] == $especie) {
                            $interacciones += $animal["interacciones"];
                            $contador++;
                        }
                    }
                    $interacciones = $interacciones / $contador;
                    echo "$interacciones interacciones</p>";
                }
            }

            registrarInteraccion($animales, "Charlie");
            echo "<pre>". print_r($animales, true). "</pre>";
            animalMasInteractivo($animales);
            promedioInteraccionesPorEspecies($animales);
        ?>
    </main>

    <footer>
        David Florido
    </footer>
        
</body>
</html>