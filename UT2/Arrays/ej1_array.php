<HTML>
<HEAD>
    <TITLE> EJ2 Arrays – 20 numeros impares </TITLE>
    <STYLE>
        table {
            border-collapse: collapse; 
        }
    </STYLE>
</HEAD>
<BODY>
<?php
    $impares = array();
    $suma = 0;

    //Rellenamos array con los impares
    for ($i=0; $i < 20; $i++) { 
        //Formula para impares
        $impares[$i] = 2 * $i +1;
    }

    //Creamos la tabla
    echo "<table border='1'>";
    echo "<tr><th>Indice</th><th>Valor</th><th>Suma</th></tr>";

    //Recorremos array para sumar y visualizar
    for ($j=0; $j < 20; $j++) { 
        $suma = $suma +$impares[$j];
        echo "<tr>";
        echo "<td>$j</td>";               // índice
        echo "<td>$impares[$j]</td>";     // valor 
        echo "<td>$suma</td>";            // suma 
        echo "</tr>";
    }

    //cerramos tabla
    echo "</table>";
?>
</BODY>
</HTML>

