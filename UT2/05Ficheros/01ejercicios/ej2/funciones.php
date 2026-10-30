<?php
    // Funciones del programa

    // 1. Limpiar datos
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // 2. Guardar alumno
    function guardarAlumno($nombre, $apellido1, $apellido2, $fecha, $localidad){
        // 1. abrimos o creamos el archivo
        $archivo = fopen("alumnos2.txt","a"); // "a" -> para añadir a la siguiente fila
        
        // 2. preparamos el visualizado
        $visualizadoLinea = $nombre ."##". $apellido1 ."##". $apellido2 ."##". $fecha ."##". $localidad;

        // 3. escribimos en el archivo
        fwrite($archivo, $visualizadoLinea ."\n");
        fclose($archivo);
    }

?>