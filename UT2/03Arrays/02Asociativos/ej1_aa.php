<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios arrays - Arrays Asociativos</title>
</head>
<body>
    <?php
        // Creamos array
        $alumnos = array(
            "Kenneth" => 21,
            "Alfonso" => 20,
            "Oxcar" => 23,
            "Mario" => 24,
            "Daniel" => 35,
        );

        // A) Mostramos su contenido
        foreach($alumnos as $nombre => $edad){
            print("El alumno $nombre tiene una edad de $edad años<br>");
        }

        // B) Nos situamos en la segunda posición y mostramos
        $nombres = array_keys($alumnos);
        $edades = array_values($alumnos);

        $segundoNombre = $nombres[1];
        $segundoEdad = $edades[1];
        print("<br>En la 2ª posicion está $segundoNombre con edad de $segundoEdad añetes<br>");

        // C) Ordenar arry por edad (de menor a mayor)
        asort($alumnos); 

        //var_dump($alumnos)
        $nombresOrdenados = array_keys($alumnos);
        $edadesOrdenadas = array_values($alumnos);

        //La primera posicion [0]
        $primerNombre = $nombresOrdenados[0];
        $primeraEdad = $edadesOrdenadas[0];

        //La última posición
        $ultimaPosicion = count($alumnos)-1;

        $ultimoNombre = $nombresOrdenados[$ultimaPosicion];
        $ultimaEdad = $edadesOrdenadas[$ultimaPosicion];

        print("<br>Primera posición nombre: " . $primerNombre ."<br>");
        print("Primera posición edad: ". $primeraEdad ."<br>");

        print("Última posición nombre: ". $ultimoNombre ."<br>");
        print("Última posición edad: ". $ultimaEdad ."<br>");


    ?>
</body>
</html>