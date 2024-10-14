<?php
    /**
     * Imprime un array asociativo como una tabla html
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