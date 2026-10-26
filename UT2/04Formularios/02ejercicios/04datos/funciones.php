<?php
    // --- FUNCIÓN DE LIMPIEZA DE DATOS ---
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // ---- 1. Comprobar campos aleatorios
    function comprobarCampos($nombre,$email,$sexo){

        // empty() -> devuelve true si está vacia
        if(empty($nombre) || empty($email)|| empty($sexo)){
            return false; //Faltarian campos
        }else{
            return true;
        }

    }

    // ---- 2. Guarda datos del alumno en un fichero (datos.txt)
    function guardarDatos($nombre,$apellido1,$apellido2,$email,$sexo){
        
    // 1. abrimos o creamos el archivo
    $archivo = fopen("datos.txt","a"); // "a" -> para añadir a la siguiente fila

    // 2. preparamos el visualizado
    $visualizadoLinea = "Nombre: $nombre | Apellido1: $apellido1 | Apellido2: $apellido2 | Email: $email | Sexo: $sexo\n";

    // 3. escribimos en el archivo
    fwrite($archivo, $visualizadoLinea);
    fclose($archivo);


    }


    // ---- 3. Mostrar los datos en una tabla
    function mostrarTabla($nombre,$apellido1,$apellido2,$email,$sexo){
        echo "<p><b>Datos guardados correctamente</b></p>";
        
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "  <tr>";
        echo "      <th>Campo</th>";
        echo "      <th>Valor</th>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td><b>Nombre</b></td>";
        echo "      <td>$nombre</td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td><b>Apellido1</b></td>";
        echo "      <td>$apellido1</td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td><b>Apellido2</b></td>";
        echo "      <td>$apellido2</td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td><b>Email</b></td>";
        echo "      <td>$email</td>";
        echo "  </tr>";
        echo "  <tr>";
        echo "      <td><b>Sexo</b></td>";
        echo "      <td>$sexo</td>";
        echo "  </tr>";
        echo "</table>";

    }
?>