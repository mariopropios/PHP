<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios arrays - Operaciones Aleatorios</title>
</head>
<body>
    <?php
        //Creamos array con 20 aleatorios
        $numeros = array();

        for ($i=0; $i < 20 ; $i++) { 
            $numeros[$i] = rand(1,100);
        }

        //Variables
        $sumaPares = 0;
        $sumaImpares = 0;
        $contadorPares = 0;
        $contadorImpares = 0;
        $mediaAmbos = 0;
        $mayorValorPares = 0;
        $mayorValorImpares = 0;

        //Recorremos array de numeros
        for ($i=0; $i <count($numeros) ; $i++) { 
            //SumaPosPar
            if($i %2 ==0){
                $sumaPares = $sumaPares + $numeros[$i];
                $contadorPares++;
                if($numeros[$i]>$mayorValorPares){
                    $mayorValorPares = $numeros[$i];
                }
            }

            //SumaPosImpar
            if($i %2 !=0){
                $sumaImpares = $sumaImpares + $numeros[$i];
                $contadorImpares++;
                if($numeros[$i]>$mayorValorImpares){
                    $mayorValorImpares = $numeros[$i];
                }
            }

            
        }

        $mediaAmbos = ($sumaPares+$sumaImpares)/($contadorPares+$contadorImpares);

        //VISUALIZAR
        //1.Creamos la tabla
        echo "<table border='1'>";
        echo "<tr><th>Suma PosPar</th><th>Suma PosImpar</th><th>Media Ambos</th><th>Mayor ValorPar</th><th>Mayor ValorImpar</th><th>Contador Par</th><th>Contador Impar</th></tr>";
        //2.Recorremos array para visualizar
        for ($i=0; $i < 1; $i++) { 
            echo "<tr>";
            echo "<td>$sumaPares</td>";               
            echo "<td>$sumaImpares</td>";     
            echo "<td>$mediaAmbos</td>";
            echo "<td>$mayorValorPares</td>";
            echo "<td>$mayorValorImpares</td>";
            echo "<td>$contadorPares</td>";
            echo "<td>$contadorImpares</td>";             
            echo "</tr>";
        }
        //3.Cerramos la tabla
        echo "</table>";

    ?>
</body>
</html>