<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 de ficheros</title>
</head>
<body>
    <h2>DATOS ALUMNO</h2>

    <form name="fichero1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <!-- Pedir datos (obligatorio) -->

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido1">Apellido 1:</label>
        <input type="text" id="apellido1" name="apellido1" required><br><br>

        <label for="apellido2">Apellido 2:</label>
        <input type="text" id="apellido2" name="apellido2" required><br><br>

        <label for="fecha">Fecha de nacimiento:</label>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <label for="localidad">Localidad:</label>
        <input type="text" id="localidad" name="localidad" required><br><br>

        <input type="submit" name="guardar" value="Guardar alumno">
        <input type="reset" value="Limpiar">
    </form>
</body>
</html>


<?php
    include "funciones.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre    = test_input($_POST["nombre"]);
        $apellido1 = test_input($_POST["apellido1"]);
        $apellido2 = test_input($_POST["apellido2"]);
        $fecha     = test_input($_POST["fecha"]);
        $localidad = test_input($_POST["localidad"]);

        // Si pulsa guardar
        if (isset($_POST["guardar"])) {
            guardarAlumno($nombre, $apellido1, $apellido2, $fecha, $localidad);
            echo "Alumno guardado correctamente"
        }

    }
?>