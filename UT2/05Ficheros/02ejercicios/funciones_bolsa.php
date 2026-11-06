<?php
    // Ruta del fichero
    function rutaFichero(){
        return $_SERVER["DOCUMENT_ROOT"] . "/files/ibex35.txt";
    }
    
    // 1. LEER DATOS DEL FICHERO Y MOSTRARLO
    function leerBolsa(){
        $ruta = rutaFichero();

        if(!file_exists($ruta)){
            return false;
        }
        
        $fichero = fopen($ruta,"r");
        $valores = array();

        fgets($fichero); // Leemos y descartamos cabecera

        

    }
?>