<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios arrays - Manipulación de arrays</title>
</head>
<body>
    <?php
        $primero = array ( "Programación", "Bases de Datos", "Lenguajes de Marcas", "Sistemas informáticos");
        $segundo = [ "DWES", "DWEC", "Despliegue", "Diseño de Interfaces Web"];
        $optativas = ["Inglés Profesional","Digitalización"];

        //VAriables
        $union = array();
        $unionFuncion = array();
        $contieneArray = false;
        $posicion;
        $eliminarModulo;
        $posEliminar;

        // A) Unir los tres arrays (sin funciones)
        foreach($primero as $pos){
            $union[] = $pos;
        }
        foreach($segundo as $pos){
            $union[] = $pos;
        }
        foreach($optativas as $pos){
            $union[] = $pos;
        }
        //var_dump($union);

        // B) Unir pero con array_merge()
        $unionFuncion = array_merge($primero,$segundo,$optativas);
        //var_dump($unionFuncion);

        // C) Añadir "Proyecto Intermodular"
        $union[] = "Proyecto Intermodular";
        //var_dump($union);

        // D) Comprobar si está "DWES"
        if(in_array("DWES",$union)){
            $contieneArray = true;
        }else{
            $contieneArray = false;
        }

        // E) Obtener su posición
        $posicion = array_search("DWES", $union);
        //print $posicion;

        // F) Eliminar un módulo indicado
        $eliminarModulo = "Inglés Profesional";
        $posEliminar = array_search("Inglés Profesional", $union);
        unset($union[$posEliminar]);
        //var_dump($union);

        // G) Ordenar alfabéticamente


    ?>
</body>
</html>