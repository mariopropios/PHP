<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios arrays - Bin/Octal/Hexadec</title>
</head>
<body>
    <?php
        // Creamos primer array con los números decimales
        $decimales = array();
        $binario = array();
        $octal = array();
        $hexadecimal = array();

        //cargamos array decimal
        for ($i=0; $i <= 20; $i++) { 
            $decimales[$i] = $i;
            $binario[$i] = decbin($i);
            $octal[$i] = decoct($i);
            $hexadecimal[$i] = dechex($i);
        }
        /*
        var_dump($decimales);
        var_dump($binario);
        var_dump($octal);
        var_dump($hexadecimal);*/

        //VISUALIZAR
        //Creamos la tabla
        echo "<table border='1'>";
        echo "<tr><th>Decimal</th><th>Binario</th><th>Octal</th><th>Hexadecimal</th></tr>";

        //Recorremos tabla para visualizar
        for ($j=0; $j <= 20; $j++) { 
            echo "<tr>";
            echo "<td>$decimales[$j]</td>";  // decimal
            echo "<td>$binario[$j]</td>";  // binario 
            echo "<td>$octal[$j]</td>";       // octal 
            echo "<td>$hexadecimal[$j]</td>"; // Hexadecimal
            echo "</tr>";
        }
        //cerramos tabla
        echo "</table>";

    ?>
</body>
</html>