<HTML>
<HEAD><TITLE> EJ6 Bucles – Simulador de ahorro </TITLE></HEAD>
<BODY>
<?php
    $capital = 1000;
    $interes = 5;
    $anios = 5;
    $GananciasAnio=0;
    
    echo ("Capital inicial: $capital $<br><br>");

    for ($i=1; $i <= $anios ; $i++) { 
        //ComplementoPersonal
        $GananciasAnio = $capital;

        //Formula
        $capital = $capital +($capital * 0.05);
        //Visualizamos por vuelta
        echo("<b>Año $i:</b> " . number_format($capital,2,".","") . " $<br>");

        //ComplementoPersonal
        $GananciasAnio = $capital - $GananciasAnio;
        echo("Bola de nieve: ". number_format($GananciasAnio,2,".","") . " $<br>");
    }

    //VISUALIZAR
    echo("<br>Capital Final: ".number_format($capital,2,".","") . " $");

?>
</BODY>
</HTML>