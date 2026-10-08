<HTML>
<HEAD><TITLE> EJ7 Bucles – Conversor decimal a binario </TITLE></HEAD>
<BODY>
<?php
    $num = 168;
    $copia = $num;       // copia para ir dividiendo (así $num no se pierde)
    $binario = "";       // para guardar el resultado en string

    while ($copia > 0) {                  // repetir hasta que lleguemos a 0
        $resto = $copia % 2;              
        $binario = $resto . $binario;     // ponemos el resto delante
        $copia = intdiv($copia, 2);       // dividimos entre 2 (sin decimales)
    }

    echo "Numero $num en binario = $binario";
?>
</BODY>
</HTML>