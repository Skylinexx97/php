<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Práctica 1 | David Florido Prada</title>
</head>
<body>
    <header>
        <h1>Listado de reservas</h1>
    </header>
    <?php
        // ##VARIABLES## //////////////////////////////////////////////////////////////////////////////////
        $MAX_MESAS = 10;
        $MAX_PERSONAS_POR_RESERVA = 6;
        $MAX_PERSONAS_POR_MESA = 4;
        $MIN_PERSONAS_POR_RESERVA_MESA = 1;

        $mesasDisponibles = 10;
        $arrayReservas = [];
        $accion = "";
        $mensaje = "";
        $personas = "";



        // ##CLASES## //////////////////////////////////////////////////////////////////////////////////
        /**
         * Objeto que representa cada una de las reservas
         * del restaurante. 
         */
        class Reserva {

            public $numero;
            public $nombre;
            public $personas;
            public $ubicacion;
            public $hora;

            public function __construct($numero, $nombre, $personas, $ubicacion = "interior", $hora = "20:00") {
                $this -> numero = $numero;
                $this -> nombre = $nombre;
                $this -> personas = $personas;
                $this -> ubicacion = $ubicacion;
                $this -> hora = $hora;
            }
        }

        // ##FUNCIONES## //////////////////////////////////////////////////////////////////////////////////

        // He escrito varias funciones que añaden distintas cantidades de reservas iniciales para realizar pruebas.
        /**
         * Crea 9 objetos Reserva en el array, cada una de una mesa.
         */
        function iniciarReservasPorDefecto1() {
            global $mesasDisponibles;
            global $arrayReservas;
            $mesasUtilizadas = 0;
            $arrayReservas = array(
                new Reserva(1, "Antonio", 4, "exterior", "21:00"),
                new Reserva(2, "Paco", 4, "exterior", "22:00"),
                new Reserva(3, "David", 2),
                new Reserva(4, "Carmen", 3, "exterior", "20:00"),
                new Reserva(5, "Juan", 1),
                new Reserva(6, "Jose", 4, "interior", "22:00"),
                new Reserva(7, "Maria", 2),
                new Reserva(8, "Rosa", 4, "exterior", "20:00"),
                new Reserva(9, "Miguel", 3, "interior", "21:00"),
            );
            foreach ($arrayReservas as $reserva) {
                $mesasUtilizadas += $reserva -> personas > 4 ? 2 : 1;
            }
            $mesasDisponibles -= $mesasUtilizadas;
        }

         /**
         * Crea 3 objetos Reserva en el array, una de ellas de dos mesas.
         */
        function iniciarReservasPorDefecto2() {
            global $mesasDisponibles;
            global $arrayReservas;
            $mesasUtilizadas = 0;
            $arrayReservas = array(
                new Reserva(1, "Antonio", 4, "exterior", "21:00"),
                new Reserva(2, "Paco", 4, "exterior", "22:00"),
                new Reserva(3, "David", 6)
            );
            foreach ($arrayReservas as $reserva) {
                $mesasUtilizadas += $reserva -> personas > 4 ? 2 : 1;
            }
            $mesasDisponibles -= $mesasUtilizadas;
        }

         /**
         * Crea sólo 1 objeto Reserva en el array, de una mesa.
         */
        function iniciarReservasPorDefecto3() {
            global $mesasDisponibles;
            global $arrayReservas;
            $mesasUtilizadas = 0;
            $arrayReservas = array(
                new Reserva(1, "Antonio", 4, "exterior", "21:00")
            );
            foreach ($arrayReservas as $reserva) {
                $mesasUtilizadas += $reserva -> personas > 4 ? 2 : 1;
            }
            $mesasDisponibles -= $mesasUtilizadas;
        }

         /**
         * Crea 10 objetos Reserva en el array, cada una de una mesa.
         */
        function iniciarReservasPorDefecto4() {
            global $mesasDisponibles;
            global $arrayReservas;
            $mesasUtilizadas = 0;
            $arrayReservas = array(
                new Reserva(1, "Antonio", 4, "exterior", "21:00"),
                new Reserva(2, "Paco", 4, "exterior", "22:00"),
                new Reserva(3, "David", 2),
                new Reserva(4, "Carmen", 3, "exterior", "20:00"),
                new Reserva(5, "Juan", 1),
                new Reserva(6, "Jose", 4, "interior", "22:00"),
                new Reserva(7, "Maria", 2),
                new Reserva(8, "Rosa", 4, "exterior", "20:00"),
                new Reserva(9, "Miguel", 3, "interior", "21:00"),
                new Reserva(10, "Ángel", 3, "exterior", "22:00")
            );
            foreach ($arrayReservas as $reserva) {
                $mesasUtilizadas += $reserva -> personas > 4 ? 2 : 1;
            }
            $mesasDisponibles -= $mesasUtilizadas;
        }

        /**
         * Muestra por pantalla, en formato de tabla html,
         * el contenido del array de reservas.
         */
        function mostrarReservas() {
            global $arrayReservas;
            global $MAX_MESAS;
            global $mesasDisponibles;
            // Actualizamos las reservas en el array
            actualizarReservas($arrayReservas);
            echo "
                <table>
                    <tr>
                        <th>Nº</th>
                        <th>NOMBRE</th>
                        <th>PERSONAS</th>
                        <th>UBICACION</th>
                        <th>HORA</th>
                    </tr>
            ";
            foreach ($arrayReservas as $reserva) {
                echo "
                    <tr>
                        <td>{$reserva -> numero}</td>
                        <td>{$reserva -> nombre}</td>
                        <td>{$reserva -> personas}</td>
                        <td>{$reserva -> ubicacion}</td>
                        <td>{$reserva -> hora}</td>
                    </tr>
                ";
            }
            echo "</table>";
            echo "<p>(". ($MAX_MESAS - $mesasDisponibles). "/$MAX_MESAS) mesas reservadas </p>";
        }

        /**
         * Intenta añadir un nuevo objeto Reserva al array con los parámetros indicados.
         * Si hay mesas suficientes y se realiza la reserva devolverá true, sino devolverá false.
         */
        function realizarReserva($nombre, $personas, $exterior = false, $hora = "20:00") {
            global $arrayReservas;
            global $mesasDisponibles;
            // Cambiar valores necesarios para crear objeto Reserva.
            // Esta nueva variable ubicación contendrá exterior o interior dependiendo de
            // si la variable $exterior es true o false.
            $ubicacion = $exterior ? "exterior" : "interior";
            // Esta variable tomará el valor de $hora si no esta vacío o "20:00" si lo esta.
            $hora = empty($hora) ? "20:00" : $hora;
            // Esta variable tomara el valor de 2 para más de 4 personas o 1 para 4 personas o menos
            $mesasNecesarias = $personas > 4 ? 2 : 1;

            // Comprobar que haya mesas suficientes
            if ($mesasNecesarias > $mesasDisponibles) { // Si no hay mesas suficientes
                return false;
            } else { // Si hay mesas suficientes
                // Añadir la nueva reserva
                array_push($arrayReservas, new Reserva(1, $nombre, $personas, $ubicacion, $hora));
                // Restar las mesas utilizadas
                if ($mesasNecesarias > 4) {
                    $mesasDisponibles = $mesasDisponibles - 2;
                } else {
                    $mesasDisponibles = $mesasDisponibles - 1;
                }
                return true;
            }
        }

        /**
         * Actualiza los números de las reservas
         */
        function actualizarReservas() {
            global $arrayReservas;
            $index = 1;
            foreach ($arrayReservas as $reserva) {
                $reserva -> numero = $index;
                $index++;
            }
        }

        /**
         * Valida si la hora pasada por parámetro es válida (está entre las 20:00 y las 22:00)
         */
        function validarHora($hora) {
            $horaMin = 20;
            $horaMax = 22;
            $formato = "/^(2[0-3]|[01][0-9]):[0-5][0-9]$/";

            if (preg_match($formato, $hora)) { // Si la hora está en el formato correcto
                $arrayHora = explode(":", $hora);
                // Comprobar que las horas esten entre 20 y 22
                if (intval($arrayHora[0]) > $horaMax || intval($arrayHora[0]) < $horaMin) { // Si la hora sobrepasa algún límite
                    return false;
                } else { // Si el formato es correcto y además la hora se encuentra entre los límites
                    return true;
                }
            } else { // Si el formato no es correcto
                return false;
            }
        }

        /**
         * Busca una reserva que tenga como nombre el indicado en el parámetro.
         * Si la encuentra, la cancela, actualiza el array y devuelve true.
         * Si no la encuentra devuelve false.
         */
        function cancelarReserva($nombre) {
            global $mesasDisponibles;
            global $arrayReservas;
            // Buscar si existe reserva con ese nombre
            foreach ($arrayReservas as $reserva) {
                // Si se encuentra reserva con ese nombre
                if ($reserva -> nombre == $nombre) { 
                    // Si era una reserva de más de 4 personas
                    // se añadirán 2 mesas disponibles, si la reserva
                    // era de 4 o menos personas se añadirá 1 mesa disponible
                    $mesasDisponibles += $reserva -> personas > 4 ? 2 : 1;

                    // Eliminamos del array la reserva
                    unset($arrayReservas[$reserva -> numero - 1]);

                    return true;
                }
            }
            // Si no se ha encontrado reserva con ese nombre
            return false;
        }
        
        // ##MAIN## //////////////////////////////////////////////////////////////////////////////////
        
        // Añadir las primeras reservas
        iniciarReservasPorDefecto3();
        
        // Comprobar parámetro acción
        // Si no existe parametro acción o está vacío
        if (!isset($_GET["accion"]) || empty($_GET["accion"])) { 
            $mensaje = "<p class=error>No se ha especificado el tipo de acción (mostrar, cancelar, reservar)<p>";
        }
        else if ( // Si la acción introducida no es válida
            $_GET["accion"] != "mostrar" &&
            $_GET["accion"] != "cancelar" &&
            $_GET["accion"] != "reservar"
            ) {
                $mensaje = "<p class=error>El tipo de acción no es correcto (mostrar, cancelar, reservar)<p>";
            } { // Si la acción introducida es válida
                $accion = htmlspecialchars($_GET["accion"]);   
                switch ($accion) {
    
                    case "mostrar":
                        $mensaje = "<p class=correcto>Mostrar reservas actuales<p>";
                        break;

                    case "cancelar":
                        // Comprobar parametros necesarios para cancelar
                        // Si el parametro nombre no existe o está vacío
                        if (!isset($_GET["nombre"]) || empty($_GET["nombre"])) { 
                            $mensaje = "<p class=error>Se requiere un nombre para cancelar una reserva<p>";
                        }
                        else { // Si se ha introducido un nombre válido
                            // Comprobar que exista una reserva con ese nombre
                            // Si no encuentra reserva con ese nombre
                            $nombre = htmlspecialchars($_GET["nombre"]);
                            if (!cancelarReserva($nombre)) { // si no encuentra reserva con ese nombre
                                $mensaje = "<p class=error>No se ha encontrado ninguna reserva a nombre de {$_GET['nombre']}<p>";
                            }
                            else { // Se ha encontrado y cancelado una reserva con ese nombre
                                $mensaje = "<p class=correcto>Se ha cancelado una reserva a nombre de {$_GET['nombre']}<p>";
                            }
                        }
                        break;

                    case "reservar":

                        // Comprobar que se hayan introducido los parámetros obligatorios (nombre, personas).
                        // Si alguno de los parámetros obligatorios no existe o esta vacío
                        if (
                            !isset($_GET["nombre"]) || 
                            empty($_GET["nombre"]) ||
                            !isset($_GET["personas"]) ||
                            empty($_GET["personas"])
                        ) { // No se han introducido parámetros correctos
                            $mensaje = "<p class=error>Error al realizar la reserva: <br> Nombre y personas no pueden estar vacíos<p>";       
                        }
                        else if ( // Si se ha introducido un nombre y una cantidad de personas entonces
                            intval($_GET["personas"]) < $MIN_PERSONAS_POR_RESERVA_MESA || intval($_GET["personas"]) > $MAX_PERSONAS_POR_RESERVA
                        ) { // Si el número de personas no es válido
                            $mensaje = "<p class=error>Error al realizar la reserva: <br> Solo se admite de $MIN_PERSONAS_POR_RESERVA_MESA a $MAX_PERSONAS_POR_RESERVA personas por reserva<p>";
                        }
                        else { // si el número de personas es válido

                            if (isset($_GET["hora"]) && !empty($_GET["hora"]) && !validarHora($_GET["hora"])) { // Si se ha introducido una hora pero NO es correcta

                                $mensaje = "<p class=error>Error al realizar la reserva: <br> La hora debe estar entre las 20:00 y las 22:00<p>";

                            } else { // Se ha introducido una hora y es válida

                                $nombre = htmlspecialchars($_GET["nombre"]);
                                $personas = intval(htmlspecialchars($_GET["personas"]));
                                $hora = isset($_GET["hora"]) ? htmlspecialchars($_GET["hora"]) : "";
                                // Si existe valor para ubicacion tomar ese valor, sino guardar la cadena "exterior"
                                $ubicacion = isset($_GET["ubicacion"]) && $_GET["ubicacion"] == "interior"  ? false : true;
                                // Si existe valor para hora tomar ese valor, sino guardar la cadena "20:00"
    
                                if(realizarReserva($nombre, $personas, $ubicacion, $hora)) {
                                    $mensaje = "<p class=correcto>Exito al realizar la reserva a nombre de $nombre<p>";
                                } else {
                                    $mensaje = "<p class=error>Error al realizar la reserva: <br> no hay mesas disponibles<p>";
                                }
                            }
                        }

                }
            }
                
        mostrarReservas();
        echo $mensaje;
    ?>
</body>
</html>