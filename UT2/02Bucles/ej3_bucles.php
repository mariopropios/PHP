<HTML>
<HEAD><TITLE> EJ3 Bucles – Tablas multiplicar </TITLE></HEAD>
<BODY>
<?php
    $num1 = 3;
    $num2 = 7;

    for ($i=$num1; $i <= $num2; $i++) { 
        //Visualizamos tabla su estructura
        echo("<table>");
            echo "<tr><th>Tabla del $i</th></tr>";
            echo "<tr><th>Operación</th><th>Resultado</th></tr>";
            for ($j=1; $j <=10 ; $j++) { 
                $resultado = $i * $j;
                echo "<tr>";
                echo "<td>$i x $j</td>";
                echo "<td>$resultado</td>";
                echo "</tr>";
            }

        echo("</table>");
    }
?>
</BODY>
</HTML>