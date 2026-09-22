<HTML>
<HEAD><TITLE> EJ3 Strings - Analizador de correo electrónico </TITLE></HEAD>
<BODY>
    <?php
    $email = "alberto.garcia@educa.madrid.org";

    //Buscamos posición @
    $posicionArroba = strpos($email,"@");

    //Extraemos lo de antes y lo de despus de @
    $dominio = substr($email,$posicionArroba+1);
    $usuario = substr($email,0,$posicionArroba);

    //Extraer organización y extensión
    $partesDominio = explode(".",$dominio);
    $organizacion = $partesDominio[0];
    $extension = $partesDominio[2];

    //Longitud dominio y usuario
    $longitudUsuario = strlen($usuario);
    $longitudDominio = strlen($dominio);

    //VISUALIZAR
    echo "Email: $email<br><br>";
    echo "Usuario: $usuario<br>";
    echo "Dominio: $dominio<br>";
    echo "Organización: $organizacion<br>";
    echo "Extensión: $extension<br><br>";
    echo "El usuario contiene $longitudUsuario caracteres<br>";
    echo "El dominio contiene $longitudDominio caracteres<br><br>";

    //Comprobacion @/.org
    if($posicionArroba==false){
        echo "La dirección de correo no contiene @<br>";
    }else{
        echo "La dirección de correo contiene @<br>";
    }

    if(str_ends_with($email,".org")){
        echo "La dirección termina en .org<br>";
    }else{
        echo "La dirección no termina en .org<br>";
    }

    ?>
</BODY>
</HTML>