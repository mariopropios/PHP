<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 de ficheros</title>
</head>
<body>
    <h2>Operaciones Ficheros</h2>
    <form name="fichero6" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>Fichero Origen (Ruta/nombre):
           <input type="text" name="ruta" required></p>

        <input type="submit" name="ver" value="Ver datos del fichero">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

<?php
    include "funciones.php";

    // Procesamiento de datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 1. Recoger (solo trim: las rutas de Windows llevan barras \)
        $ruta = trim($_POST["ruta"]);

        // 2. Validar
        $error = validarFichero($ruta);

        // 3. Mostrar
        if ($error != "") {
            echo $error;
        } else {
            echo datosFichero($ruta);
        }
    }
    
?>