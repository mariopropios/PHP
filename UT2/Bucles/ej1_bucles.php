<HTML>
<HEAD><TITLE> EJ1 Bucles – Estadística secuencia </TITLE></HEAD>
<BODY>
<?php
    $inicio = 1;
    $fin = 100;

    $cantidadNum=0;
    $numerosPares=0;
    $numerosImpares=0;
    $multiplos=0;
    $sumaTotal=0;

    for ($i=$inicio; $i <= $fin; $i++) { 
        $cantidadNum++;
        $sumaTotal += $i;

        //esPar
        if($i % 2 == 0){
            $numerosPares++;
        }else{
            $numerosImpares++;
        }

        //multiplo3
        if($i % 3 == 0){
            $multiplos++;
        }
    }

    //VISUALIZAMOS
    echo("Números del $inicio al $fin<br><br>");
    echo("Cantidad de números: $cantidadNum<br>");
    echo("Números pares: $numerosPares<br>");
    echo("Números impares: $numerosImpares<br>");
    echo("Múltiplos de 3: $multiplos<br>");
    echo("Suma Total: $sumaTotal<br>");

?>
</BODY>
</HTML>
