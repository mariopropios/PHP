<HTML>
<HEAD><TITLE> EJ5 Bucles - Factorial </TITLE></HEAD>
<BODY>
<?php
    $num = 5;
    $factorial = 1;

    $textoVisualizar = "$num! = ";

    for ($i=$num; $i >= 1; $i--) { 
        $factorial *= $i;

        $textoVisualizar .= $i;
        if($i>1){
            $textoVisualizar .= " x ";
        }
    }

    $textoVisualizar .= " = $factorial";

    //VISUALIZAMOS
    echo($textoVisualizar);
?>
</BODY>
</HTML>