<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
    <?php
    $nombre = " aLBeRTo gaRCia loPEz ";

    $nombreLimpio = trim($nombre);
    $nombreMinuscula = strtolower($nombreLimpio);

    //1.Normalizado
    $nombreNormalizado = ucwords($nombreMinuscula);

    //2.Número de carácteres
    $numeroCaracteres = strlen($nombreNormalizado);

    //3.Separar cadenas
    $partes = explode(" ",$nombreNormalizado);

    $nombre1 = $partes[0];
    $apellido1 = $partes[1];
    $apellido2 = $partes[2];

    //4.Iniciales
    $inicial1 = substr($nombre1,0,1);
    $inicial2 = substr($apellido1,0,1);
    $inicial3 = substr($apellido2,0,1);

    $iniciales = "$inicial1.$inicial2.$inicial3";

    //5.Nombre de usuario
    $nombUsuario = strtolower($nombre1 . "." . $apellido1);

    //---VISUALIZAR
    echo "Cadena original: $nombre<br>";    
    echo "Nombre normalizado: $nombreNormalizado<br>";
    echo "Número de carácteres: $numeroCaracteres<br>";
    echo "Nombre: $nombre1<br>";
    echo "Primer apellido: $apellido1<br>";
    echo "Segundo apellido: $apellido2<br>";
    echo "Iniciales: $iniciales<br>";
    echo "Nombre de usuario: $nombUsuario";

    ?>
</BODY>
</HTML>