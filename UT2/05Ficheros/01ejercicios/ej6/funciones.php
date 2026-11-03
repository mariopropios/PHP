<?php
    // 1. Comprueba que el fichero existe
    function validarFichero($ruta){
        if(!file_exists($ruta)){
            return "Error, el fichero '$ruta' no existe";
        }
        if(!is_file($ruta)){
            return "Error, '$ruta' no es un fichero";
        }
        return "";
    }

    // 2. Visualizar
    function datosFichero($ruta){
        $nombre       = basename($ruta);                                // solo el nombre
        $rutaCompleta = realpath($ruta);                                // ruta completa
        $tamanio      = number_format(filesize($ruta), 0, ',', '.');    // 1245 → 1.245
        $acceso       = date("d/m/Y", fileatime($ruta));                // último acceso
        $modificacion = date("d/m/Y", filemtime($ruta));                // última modificación
        $tipo         = strtoupper(pathinfo($ruta, PATHINFO_EXTENSION)); // extensión en mayúsculas

        return "Nombre: $nombre<br>"
             . "Ruta: $rutaCompleta<br>"
             . "Tamaño: $tamanio bytes<br>"
             . "Último acceso: $acceso<br>"
             . "Última modificación: $modificacion<br>"
             . "Tipo: $tipo";
    }
?>