<?php
    // Limpiar datos de entrada (no lo uso)
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // 1. copiar fichero
    // 1.1 creamos carpeta de destino
    function crearCarpeta($destino){
        $carpeta = dirname($destino);
        if(!file_exists($carpeta)){
            mkdir($carpeta,0777,true); // con 0777 damos permisos (leer,escribir,ejecutar)
        }
    }

    // 1.2 Copiar fichero
    function copiarFichero($origen,$destino){
        crearCarpeta($destino);
        if(copy($origen,$destino)){
            return "Fichero copiado correctamente";
        }
        return "Error, no se pudo copiar";
    }

    // 1.3 Validar datos
    function validarDatos($origen, $destino, $operacion){
        if(!file_exists($origen)){
            return "Error, el fichero origen no existe";
        }
        if($operacion != "borrar" && $destino == ""){
            return "Error, indica un fichero destino";
        }
        return "";
    }

    // 2. renombrar fichero
    function renombrarFichero($origen,$destino){
        crearCarpeta($destino);
            if(rename($origen,$destino)){
                return "Fichero renombrado correctamente";
            }
            return "Error, no se pudo renombrar";
    }

    // 3. borrar fichero
    function borrarFichero($origen){
        if(unlink($origen)){
            return "Fichero borrado correctamente";
        }
        return "Error, no se pudo borrar el fichero";
    }
?>