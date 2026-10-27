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
        $archivo = fopen("alumnos1.txt","a"); // "a" -> para añadir a la siguiente fila

        // 2. condiciones de linea
        $nombre    = str_pad($nombre, 40, " "); //40
        $apellido1 = str_pad($apellido1, 41); // 81
        $apellido2 = str_pad($apellido2, 42); //123
        $fecha     = str_pad($fecha, 10); //133
        $localidad = str_pad($localidad, 27); //160
        
        // 3. preparamos el visualizado
        $visualizadoLinea = $nombre . $apellido1 . $apellido2 . $fecha . $localidad;

        // 4. escribimos en el archivo
        fwrite($archivo, $visualizadoLinea);
        fclose($archivo);
    }

?>