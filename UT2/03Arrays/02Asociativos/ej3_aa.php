<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios arrays - Arrays Asociativos</title>
</head>
<body>
    <?php
        //Creamos el array de productos
        $productos = array("MON01" => 189.99, "TEC02" => 45.50, "RAT03" => 25.99, "SSD04" => 79.95, "RAM05" => 54.00);

        // A) Mostrar todos los productos 
        echo "<h3>a) Todos los productos</h3>";

        foreach ($productos as $codigo => $precio) {      // $codigo = clave, $precio = valor
            echo "$codigo: " . number_format($precio, 2) . " €<br>";
        }

        // B) Mostrar el producto más caro y el más barato
        
    ?>
</body>
</html>