<?php
    // 1. Limpiamos datos
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // 2. Generar la baraja de 40 cartas
    function barajaBarajeada(){
        $numerosBaraja = [1,2,3,4,5,6,7,10,11,12];
        $baraja = [];

        // Como son 4 palos (4 cartas iguales)
        for ($i=0; $i < 4; $i++) { 
            foreach($numerosBaraja as $num){
                if ($i == 0){
                    $baraja[] = $num . "C"; // sin $i para que lo añada al final
                }elseif($i == 1){
                    $baraja[] = $num . "D";
                }elseif($i == 2){
                    $baraja[] = $num . "T";
                }else{
                    $baraja[] = $num . "P";
                }
            }
        }

        // Mezclamos el array de las cartas
        shuffle($baraja);

        // Devolvemos la baraja barajeada
        return $baraja;
    }

    // 3. Calcular valor de lascartas
    function calcularValorCarta($carta){

        // Extraemos lo que nos interesa de la carta "7C"
        $numero = (int)substr($carta,0,-1); // quitamos la letra (última posición)

        if($numero>= 1  && $numero <= 7){
            return (float)$numero;
        }else{
            return 0.5;
        }
        
    }

    // 4. Calcular puntuación jugador
    function calcularPuntuacionJugador($cartasJugador){
        $totalPuntuacion = 0;

        foreach($cartasJugador as $carta){
            $totalPuntuacion += calcularValorCarta($carta);
        }

        return $totalPuntuacion;
    }

    // 5. Ganador de la partida
    function ganadorPartida($puntuacionesPartida, $apuestaTotal){
        $tiene7media = false;
        $puntuacionMasAlta = 0;
        $ganadores = [];

        // Recorremos array puntuaciones partida
        foreach($puntuacionesPartida as $jugador => $datos){
            $puntos = $datos["puntos"]; // Accedemos a los puntos del array asociativo

            // Si el jugador no se ha pasado de 7.5
            if($puntos <= 7.5){

                // si tiene 7.5 exacto
                if($puntos == 7.5){
                    $tiene7media = true;
                }

                // buscamos la puntuación más alta
                if($puntos > $puntuacionMasAlta){
                    $puntuacionMasAlta = $puntos;
                    $ganadores = [$jugador];

                }elseif($puntos == $puntuacionMasAlta && $puntuacionMasAlta>0){
                    $ganadores[] = $jugador;

                }
            }
        }

        // Calculamos el premio por jugador
        $premio = 0;
        $porcentaje;
        $premioTotal;

        if(count($ganadores) > 0){
            
            // Si hay 7.5 exacto
            if($tiene7media == true){
                $porcentaje = 0.80;
            }else{
                $porcentaje = 0.50;
            }

            // el total a repartir sería
            $premioTotal = $apuestaTotal * $porcentaje;

            // premio por jugador
            $premio = $premioTotal / count($ganadores);
        }

        return [
            'ganadores' => $ganadores,
            'maxPuntuacion' => $puntuacionMasAlta,
            'premioIndividual' => $premio,
            'tiene7media' => $tiene7media
        ];
    }
?>