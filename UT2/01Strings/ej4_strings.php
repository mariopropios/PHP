<HTML>
<HEAD><TITLE> EJ4 Strings - Generador de URL amigable (slug) </TITLE></HEAD>
<BODY>
    <?php
    $titulo = " Introducción a la Programación Web con PHP ";

    //Eliminamos espacios (del principio y del final) con TRIM
    $tituloLimpio = trim($titulo);

    //Convertimos a minúscula
    $tituloLimpio = strtolower($tituloLimpio);

    //Cambiamos espacios por -
    $tituloLimpio = str_replace(" ", "-",$tituloLimpio);

    //Limpiamos tildes
    
    //URL final
    $urlFinal = "http://$tituloLimpio";

    //VISUALIZAR
    echo "<a href='$urlFinal'>$urlFinal</a>";
    ?>
</BODY>
</HTML>