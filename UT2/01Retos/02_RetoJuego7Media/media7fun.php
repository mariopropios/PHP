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
    function ganadorPartida(){
        
    }
?>