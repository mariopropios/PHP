<HTML>
<HEAD><TITLE> EJ4 Bucles – Número primo </TITLE></HEAD>
<BODY>
<?php
    $num = 17;
    $esPrimo = true;

    echo("Número analizado: $num<br><br>");

    //Probamos divisores desde el 2 hasta el número anterior de $num
    for ($i=2; $i < $num; $i++) { 

        //Si se encuentra 1 divisor ya no seria primo
        if($num % $i == 0){
            echo("Probando divisor $i -> Divisible<br>");
            $esPrimo = false;
        }else{
            echo("Probando divisor $i -> No divisible<br>");
        }
    }

    //Comprobación final para saber si es primo
    if($esPrimo == true){
        echo("<br>$num es un número primo");
    }else{
        echo("<br>$num no es un número primo");
    }
    
?>
</BODY>
</HTML>