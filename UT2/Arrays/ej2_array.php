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
        $diaMaxima;
        $temperaturaMinima = $temperaturas[0];
        $diaMinima;
        $sumaTemperaturas=0;
        $contadorMedia = 0;
        $temperaturaMedia;
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

    ?>
</body>
</html>