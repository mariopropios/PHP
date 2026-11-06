<?php
    // Ruta del fichero
    function rutaFichero(){
        return $_SERVER["DOCUMENT_ROOT"] . "/files/ibex35.txt";
    }
    
    // 1. LEER DATOS DEL FICHERO Y MOSTRARLO
    function leerBolsa(){
        $ruta = rutaFichero();

        if(!file_exists($ruta)){
            trigger_error("No se encuentra el fichero ibex35.txt");
            return false;
        }
        
        $fichero = fopen($ruta,"r");
        $valores = array();

        fgets($fichero); // Leemos y descartamos cabecera (array_shift)

        // leemos fichero linea a linea
        foreach($lineas as $linea){

        // limpiamos
        $linea = trim($linea);

        // saltamos lineas vacias
        if($linea == ""){
            continue;
        }

        $trozos = preg_split('/\s+/', $linea);
        $datos  = array_slice($trozos, -9);
        $nombre = implode(" ", array_slice($trozos, 0, count($trozos) - 9));

        $valores[] = array(
            "valor"    => $nombre,
            "ultimo"   => $datos[0],
            "var_porc" => $datos[1],
            "var"      => $datos[2],
            "ac_anio"  => $datos[3],
            "max"      => $datos[4],
            "min"      => $datos[5],
            "vol"      => $datos[6],
            "capit"    => $datos[7],
            "hora"     => $datos[8]
        );
        return $valores;
    }
?>