<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio datos alumno</title>
</head>
<body>
    <h2>DATOS ALUMNO</h2>

    <form name="cambiobase" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">

        <!-- Pedir datos (texto) -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>*Obligatorio<br>

        <label for="apellido1">Apellido1:</label>
        <input type="text" id="apellido1" name="apellido1"><br><br>
        
        <label for="apellido2">Apellido2:</label>
        <input type="text" id="apellido2" name="apellido2"><br><br>

        <!-- Email (Obligatorio) -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"> *Obligatorio<br><br>

         <!-- Selección de sexo (Obligatorio) -->
        <label>Sexo:</label>
        <input type="radio" id="mujer" name="sexo" value="Mujer">
        <label for="mujer">Mujer</label>
        <input type="radio" id="hombre" name="sexo" value="Hombre">
        <label for="hombre">Hombre</label> *Obligatorio<br><br>

        <!-- Botones de enviar y borrar -->
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form>
</body>
</html>

<?php
    // FUNCIONES (importamos)
    include "funciones.php";

    // PROCESAMIENTO DE DATOS
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    }
?>