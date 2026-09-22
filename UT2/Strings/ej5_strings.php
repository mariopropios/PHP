<HTML>
<HEAD><TITLE> EJ5 Strings - Procesamiento de una URL </TITLE></HEAD>
<BODY>
    <?php
    $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";

    //Localizamos posición
    $posicionDosPuntos = strpos($url,":");
    $posicionDosBarras = strpos($url,"//");
    $posicionInterrogacion = strpos($url,"?");
    $posicionIgual = strpos($url,"=");

    //Extraemos -> https
    $protocolo = substr($url,0,$posicionDosPuntos);

    //Extraemos -> www.tienda.es/productos/portatil.php... -> www.tienda.es
    $dominioRuta = substr($url,$posicionDosBarras+2,$posicionInterrogacion);
    $dominioPartes = explode("/",$dominioRuta);
    $dominio = $dominioPartes[0];


    //VISUALIZAMOS
    echo "Protocolo: $protocolo<br>";
    echo "Dominio: $dominio<br>";
    ?>
</BODY>
</HTML>