<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 de ficheros</title>
</head>
<body>
    <h2>Operaciones Ficheros</h2>
    <form name="fichero5" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        <p>Fichero (Ruta/nombre):
           <input type="text" name="ruta" required></p>

        <p>Operaciones:</p>
        <p><input type="radio" name="operacion" value="fichero" checked> Mostrar fichero</p>
        <p><input type="radio" name="operacion" value="linea"> Mostrar línea
           <input type="number" name="numLinea" value="1" min="1"></p>
        <p><input type="radio" name="operacion" value="primeras"> Mostrar N primeras líneas
           <input type="number" name="numPrimeras" value="5" min="1"></p>

        <input type="submit" name="ejecutar" value="Ejecutar operación">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

<?php
    //Procesamiento de datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    }

?>