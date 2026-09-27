<HTML>
<HEAD><TITLE> EJ2 Bucles – Tabla multiplicar </TITLE></HEAD>
<BODY>
<?php
    $num = 8;

    //Creamos la tabla
    echo "<table>";
    echo "<tr><th>Operación</th><th>Resultado</th>";

    for ($i=1; $i <=10 ; $i++) { 
        $resultado = $num*$i;

        //Mostramos en la tabla
        echo("<tr>");
            echo("<td>$num*$i</td>");
            echo("<td>$resultado</td>");
        echo("</tr>");    
    }
    echo "</table>";
?>
</BODY>
</HTML>