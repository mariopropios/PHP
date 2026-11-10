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
                $baraja[] = $num; // sin $i para que lo añada al final
            }
        }

        // Mezclamos el array de las cartas
        shuffle($baraja);

        // Devolvemos la baraja barajeada
        return $baraja;
    }

    // 3. Calcular valor de lascartas
    function calcularValorCarta(){

    }
?>