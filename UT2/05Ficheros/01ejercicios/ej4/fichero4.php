<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 de ficheros</title>
</head>
<body>
    <p>Mostrar el contenido del fichero alumnos2.txt en una tabla HTML</p>
    
    <form method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        <input type="submit" name="mostrar" value="Mostrar datos del fichero alumnos1.txt">
    </form>
</body>
</html>

<?php
    if (isset($_POST["mostrar"])) {

        // 1. Leemos el fichero (cada línea pasa a ser una posición del array)
        $lineas = file("../ej2/alumnos2.txt");

        echo "<h2>Listado de alumnos</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Apellido 1</th><th>Apellido 2</th><th>Fecha nacimiento</th><th>Localidad</th></tr>";

        // 2. Recorremos cada línea 
        foreach ($lineas as $linea) {
            
            $partes = explode("##",trim($linea)); 

            echo "<tr>";
            echo "<td>$partes[0]</td>";
            echo "<td>$partes[1]</td>";
            echo "<td>$partes[2]</td>";
            echo "<td>$partes[3]</td>";
            echo "<td>$partes[4]</td>";
            echo "</tr>";
        }

        echo "</table>";

        // 3. Número de filas leidas
        echo "<p>Número de filas leídas: " . count($lineas) . "</p>";
    }
?>