<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 de ficheros</title>
</head>
<body>
    <h2>Operaciones Ficheros</h2>
    <form name="fichero5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <p>Fichero Origen (Ruta/nombre):
           <input type="text" name="origen" required></p>
        <p>Fichero Destino(Ruta/nombre):
            <input type="text" name="destino"></p>

        <p>Operaciones:</p>
        <p><input type="radio" name="operacion" value="copiar" checked> Copiar fichero</p>
        <p><input type="radio" name="operacion" value="renombrar"> Renombrar fichero</p>
        <p><input type="radio" name="operacion" value="borrar"> Borrar fichero</p>

        <input type="submit" name="ejecutar" value="Ejecutar operación">
        <input type="reset" value="Borrar">
    </form>
</body>
</html>

<?php
    include "funciones.php";

    // Procesamiento de datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Datos del formulario
        $origen    = test_input($_POST["origen"]);
        $destino = test_input($_POST["destino"]);
        $operacion = $_POST["operacion"];

        // Validar datos
        $validar = validarDatos($origen, $destino, $operacion);

        if($validar != ""){
            echo $validar;
        }else{
            switch ($operacion) {
                case "copiar":
                    echo copiarFichero($origen, $destino);
                    break;
                case "renombrar":
                    echo renombrarFichero($origen, $destino);
                    break;
                case "borrar":
                    echo borrarFichero($origen);
                    break;
            }
        }
    }
    
?>