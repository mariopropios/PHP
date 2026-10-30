<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 de ficheros</title>
</head>
<body>
    <p>Mostrar el contenido del fichero alumnos1.txt en una tabla HTML</p>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="mostrar" value="Mostrar datos del fichero alumnos1.txt">
    </form>
</body>
</html>
<?php
    if (isset($_POST["mostrar"])) {

        // 1. Leemos el fichero (cada línea pasa a ser una posición del array)
        $lineas = file("../ej1/alumnos1.txt");

        echo "<h2>Listado de alumnos</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Apellido 1</th><th>Apellido 2</th><th>Fecha nacimiento</th><th>Localidad</th></tr>";

        // 2. Recorremos cada línea 
        foreach ($lineas as $linea) {
            // substr(texto, desde, cuantos)
            $nombre    = trim(substr($linea, 0, 40));     // 1 a 40
            $apellido1 = trim(substr($linea, 40, 41));    // 41 a 81
            $apellido2 = trim(substr($linea, 81, 42));    // 82 a 123
            $fecha     = trim(substr($linea, 123, 10));   // 124 a 133
            $localidad = trim(substr($linea, 133, 27));   // 134 a 160

            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$apellido1</td>";
            echo "<td>$apellido2</td>";
            echo "<td>$fecha</td>";
            echo "<td>$localidad</td>";
            echo "</tr>";
        }

        echo "</table>";

        // 3. Número de filas leidas
        echo "<p>Número de filas leídas: " . count($lineas) . "</p>";
    }
?>