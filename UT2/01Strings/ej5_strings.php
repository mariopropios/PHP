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

    //Extraemos -> //www.tienda.es/productos/portatil.php 
    $dominioRuta = substr($url,$posicionDosBarras+2,$posicionInterrogacion - ($posicionDosBarras +2));
    $dominioPartes = explode("/",$dominioRuta);

    //Extraemos -> www.tienda.es
    $dominio = $dominioPartes[0];

    //Extraemos -> /productos/portatil.php
    $ruta = "/".$dominioPartes[1]."/".$dominioPartes[2];

    //Extraemos -> portatil.php
    $fichero = $dominioPartes[2];

    //Extraemos ->  id=34&marca=lenovo
    $parametros = substr($url,$posicionInterrogacion+1);

    //Extraemos ->[0]: id=34    [1]:marca=lenovo
    $parametrosPartes = explode("&",$parametros);

    //Extraemos -> id   34
    $partesId = explode("=",$parametrosPartes[0]);
    $id = $partesId[1];

    //Extraemos -> marca  lenovo
    $partesMarca = explode("=",$parametrosPartes[1]);
    $marca= $partesMarca[1];

    //VISUALIZAMOS (salida 1)
    echo "<b>Salida 1</b><br><br>";
    echo "Protocolo: $protocolo<br>";
    echo "Dominio: $dominio<br>";
    echo "Ruta: $ruta<br>";
    echo "Fichero: $fichero<br>";
    echo "Parámetros: $parametros<br><br>";

    //VISUALIZAMOS (salida 2)
    echo "<b>Salida 2</b><br><br>";
    echo "Protocolo: $protocolo<br>";
    echo "Dominio: $dominio<br>";
    echo "Ruta: $ruta<br>";
    echo "Fichero: $fichero<br>";
    echo "Id producto = $id<br>";
    echo "Marca = $marca"
    ?>
</BODY>
</HTML>