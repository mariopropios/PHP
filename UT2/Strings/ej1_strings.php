<HTML>
<HEAD><TITLE> EJ1 Strings – Conversor de Decimal a Binario </TITLE></HEAD>
<BODY>
    <?php
    //-----PRIMERA IP
    $ip="192.18.16.204";

    //Separamos por los .
    $partes = explode(".",$ip);

    //Cada parte se cambia a la forma binaria (para rellenar los 8 huecos)
    $ipBinaria = sprintf("%08b.%08b.%08b.%08b",$partes[0],$partes[1],$partes[2],$partes[3]);

    echo "IP $ip en binario es $ipBinaria<br>";

    //-----SEGUNDA IP
    $ip2="10.33.161.2";

    $partes = explode(".",$ip2);

    $ipBinaria = sprintf("%08b.%08b.%08b.%08b",$partes[0],$partes[1],$partes[2],$partes[3]);

    echo "IP $ip2 en binario es $ipBinaria";
    ?>
</BODY>
</HTML>