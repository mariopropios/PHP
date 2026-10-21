<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bingo con funciones</title>
    <style>
        table { border-collapse: collapse; margin-bottom: 10px; }
        td { border: 1px solid black; width: 35px; height: 30px; text-align: center; }
    </style>
</head>
<body>
<?php
    // ----- FUNCIONES 

    // Devuelve un array con las bolas del 1 al 60 mezcladas
    function crearBombo() {
        $bolas = range(1, 60);
        shuffle($bolas);
        return $bolas;
    }

    // Devuelve un cartón: 3 filas x 7 columnas, con 15 números distintos y 6 huecos
    function crearCarton() {
        $todos = range(1, 60);
        shuffle($todos);
        $celdas = array_slice($todos, 0, 15);   // cogemos 15 números DISTINTOS

        for ($i = 0; $i < 6; $i++) {
            $celdas[] = null;                   // añadimos 6 huecos
        }

        shuffle($celdas);                       // mezclamos números y huecos
        return array_chunk($celdas, 7);         // lo partimos en filas de 7
    }

    // Devuelve un jugador: un array con sus 3 cartones
    function crearJugador() {
        return array(
            "cartonA" => crearCarton(),
            "cartonB" => crearCarton(),
            "cartonC" => crearCarton()
        );
    }

    // Tacha la bola en un cartón (si está) y devuelve el cartón actualizado
    function tacharBola($carton, $bola) {
        foreach ($carton as $f => $fila) {
            foreach ($fila as $c => $valor) {
                if ($valor === $bola) {
                    $carton[$f][$c] = null;     // tachado = null
                }
            }
        }
        return $carton;
    }

    // Devuelve true si el cartón ya no tiene ningún número sin tachar
    function cartonCompleto($carton) {
        foreach ($carton as $fila) {
            foreach ($fila as $valor) {
                if ($valor !== null) {
                    return false;               // queda al menos uno: no está completo
                }
            }
        }
        return true;                            // revisó todo y no quedaba ninguno
    }

    // Dibuja un cartón como tabla HTML
    function mostrarCarton($carton) {
        echo "<table>";
        foreach ($carton as $fila) {
            echo "<tr>";
            foreach ($fila as $valor) {
                echo "<td>$valor</td>";         // null se muestra vacío
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    // ------ PROGRAMA PRINCIPAL 

    $bombo = crearBombo();

    $jugadores = array(
        "Jugador 1" => crearJugador(),
        "Jugador 2" => crearJugador()
    );

    $jugadoresOriginal = $jugadores;    // copia para enseñar los cartones del principio

    $ganadores = array();               // aquí apuntaremos TODOS los ganadores

    foreach ($bombo as $bola) {
        echo "La bola que ha salido es: $bola<br>";

        // Revisamos TODOS los jugadores y TODOS sus cartones con esta bola
        foreach ($jugadores as $nombreJugador => $cartones) {
            foreach ($cartones as $nombreCarton => $carton) {

                $carton = tacharBola($carton, $bola);
                $jugadores[$nombreJugador][$nombreCarton] = $carton;   // guardamos el cambio

                if (cartonCompleto($carton)) {
                    $ganadores[] = "$nombreJugador - $nombreCarton";   // apuntamos al ganador
                }
            }
        }

        // Solo al terminar la bola miramos si hay ganadores
        if (count($ganadores) > 0) {
            break;                      // fin del juego
        }
    }

    // ----- VISUALIZAR 
    echo "<h2>¡BINGO!</h2>";
    foreach ($ganadores as $ganador) {
        echo "🏆 $ganador<br>";
    }

    echo "<h3>Cartones originales</h3>";
    
    foreach ($jugadoresOriginal as $nombreJugador => $cartones) {
        foreach ($cartones as $nombreCarton => $carton) {
            echo "$nombreJugador - $nombreCarton";
            mostrarCarton($carton);
        }
    }
?>
</body>
</html>