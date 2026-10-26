<?php
    // FUNCIONES (importamos)
    include "funciones.php";

    // PROCESAMIENTO DE DATOS
    $nombre    = test_input($_POST["nombre"]);
    $apellido1 = test_input($_POST["apellido1"]);
    $apellido2 = test_input($_POST["apellido2"]);
    $email     = test_input($_POST["email"]);

    
    // COMPROBAR SI HAY MARCADO BOTÓN
    if(isset($_POST["sexo"])){
        $sexo = test_input($_POST["sexo"]);
    }else{
        $sexo = "";
    }

    // COMPROBAR CAMPOS OBLIGATORIOS Y VISUALIZAR
    echo "<h2>Datos Alumno</h2>";

    if(comprobarCampos($nombre,$email,$sexo)){
        //1. guardamos los datos en fichero
        guardarDatos($nombre,$apellido1,$apellido2,$email,$sexo);

        //2. mostramos datos formato tabla
        
        mostrarTabla($nombre, $apellido1, $apellido2, $email, $sexo);
    }else{
         echo "<p>Error: Debes rellenar todos los campos obligatorios (Nombre, Email y Sexo)</p>";
    }

?>