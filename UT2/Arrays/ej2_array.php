<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios arrays - Temperaturas</title>
</head>
<body>
    <?php
        $temperaturas = array(18, 21, 19, 24, 25, 22, 20, 26, 23, 21);
        $diferencia = array();
        $temperaturaMaxima = 0;
        $diaMaxima=1;
        $temperaturaMinima = $temperaturas[0];
        $diaMinima=1;
        $sumaTemperaturas=0;
        $contadorMedia = 0;
        $numDiasEncima=0;

        //Recorremos array $temperaturas
        for ($i=0; $i < count($temperaturas); $i++) {
            $contadorMedia++;

            //Rellenamos array $diferencia
            if($i == 0){
                $diferencia[$i] = 0;
            }else{
                $diferencia[$i]= $temperaturas[$i]-$temperaturas[$i-1];
            }

            //Temperatura Máxima y el dia
            if($temperaturas[$i]>$temperaturaMaxima){
                $temperaturaMaxima = $temperaturas[$i];
                $diaMaxima = $i+1;
            }

            //Temperatura Mínima y el dia
            if($temperaturas[$i]<$temperaturaMinima){
                $temperaturaMinima = $temperaturas[$i];
                $diaMinima = $i+1;
            }

            //Temperatura media
            $sumaTemperaturas += $temperaturas[$i];
            
        }

        $temperaturaMedia = $sumaTemperaturas/$contadorMedia;

        //Para calcular los dias por encima de la media
        for ($i=0; $i < count($temperaturas); $i++) {
            if($temperaturas[$i]>$temperaturaMedia){
                $numDiasEncima++;
            }
        }

        //VISUALIZAR 1
        //1.Creamos la tabla
        echo "<table border='1'>";
        echo "<tr><th>Dia</th><th>Temperatura</th><th>Diferencia dia anterior</th></tr>";
        //2.Recorremos array para visualizar
        for ($i=0; $i < count($temperaturas); $i++) { 
            $dia = $i+1;
            echo "<tr>";
            echo "<td>$dia</td>";               // dia
            echo "<td>$temperaturas[$i]</td>";     // temperatura 
            echo "<td>$diferencia[$i]</td>";            // diferencia dia anterior 
            echo "</tr>";
        }
        //3.Cerramos la tabla
        echo "</table>";

        //VISUALIZAR 2
        echo("<br>Temperatura máxima de $temperaturaMaxima ºC el dia $diaMaxima<br>");
        echo("Temperatura mínima de $temperaturaMinima ºC el dia $diaMinima<br>");
        echo("Temperatura media de $temperaturaMedia<br>");
        echo("Número de dias por encima de la media $numDiasEncima");
    ?>
</body>
</html>