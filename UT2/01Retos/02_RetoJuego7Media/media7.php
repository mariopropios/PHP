<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado de la partida — Siete y Media</title>
    <style>
        *{box-sizing:border-box}
        body{margin:0;background:#f2f6f8;color:#172c42;font-family:Arial,Helvetica,sans-serif}
        .shell{max-width:1100px;margin:28px auto;padding:0 20px}
        .banner{background:linear-gradient(115deg,#075c48,#0c8c6b);color:#fff;padding:25px 30px;border-radius:15px 15px 0 0}
        .banner h1{margin:0 0 6px;font-size:30px}
        .banner p{margin:0;opacity:.9}
        .panel{background:white;border:1px solid #dbe5eb;border-radius:13px;box-shadow:0 8px 24px #142c3a10;padding:24px;margin:20px 0}
        .panel h2{margin:0 0 19px;font-size:21px;color:#075c48}
        .notice{padding:17px 20px;border:1px solid #a8dec1;background:#eaf9f0;color:#08633b;border-radius:10px;font-size:19px;font-weight:bold;margin-bottom:16px}
        .notice.bad{background:#fff6e9;border-color:#eed4a4;color:#8d4b12}
        .score{width:100%;border-collapse:collapse;font-size:15px}
        .score th{background:#e9f2f5;color:#143d50;text-align:left;padding:12px}
        .score td{border-bottom:1px solid #e3ebf0;padding:12px;vertical-align:middle}
        .score tr.win{background:#edfaf2}
        .cards{display:flex;gap:5px;flex-wrap:wrap}
        .playing{width:43px;height:62px;border:1px solid #cbd5dc;border-radius:6px;background:white;display:flex;flex-direction:column;align-items:center;justify-content:center;box-shadow:0 2px 4px #0001;font-weight:bold;font-size:17px}
        .red{color:#d12c3b}
        .black{color:#1e2c38}
        .playing span{font-size:22px}
        .total{font-weight:bold;color:#086b45}
        .file{margin-top:15px;background:#f5f8fa;border:1px solid #dce5ea;border-radius:9px;padding:15px}
        .file strong{display:block;margin-bottom:10px}
        .file pre{font-size:13px;line-height:1.55;margin:0;white-space:pre-wrap;font-family:Consolas,monospace}
        .back{display:inline-block;text-decoration:none;border-radius:7px;background:#07845e;color:white;padding:12px 20px;font-weight:bold}
        .tablewrap{overflow-x:auto}
    </style>
</head>

<body>
    <main class="shell">
        <header class="banner">
            <h1>🂡 Juego de las Siete y Media</h1>
            <p>Reto 2.2 · Resultado de la partida</p>
        </header>
        <section class="panel">
            
            <h2>Cartas y puntuaciones</h2>
            
            <h2 style="margin-top:25px">Fichero generado</h2>
           
            <p style="margin-top:22px">
                <a class="back" href="media7.html">← Volver al formulario</a>
            </p>
        </section>
    </main>

    <?php
        include "media7fun.php";

        // 1. barajamos
        $barajaPrueba = barajaBarajeada();

        echo "<h1>Comprobación baraja:</h1>";
        var_dump($barajaPrueba);

        // 2. simulamos jugador (con 3 carts)
        $cartasJugador1 = [];

        $cartasJugador1[] = array_shift($barajaPrueba); // Carta 1
        $cartasJugador1[] = array_shift($barajaPrueba); // Carta 2
        $cartasJugador1[] = array_shift($barajaPrueba); // Carta 3

        echo "<h1>Comprobación 3 cartas jugador 1:</h1>";
        var_dump($cartasJugador1);

        // 3. calculamos puntuación
        $puntosTotales = calcularPuntuacionJugador($cartasJugador1);
        
        echo "<h1>Comprobación puntuación jugador:</h1>";
        echo "Puntuación jugador: " . $puntosTotales;
    ?>
</body>
</html>