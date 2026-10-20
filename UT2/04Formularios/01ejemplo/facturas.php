<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FORMULARIO DE FACTURAS</title>
</head>
<body>

    <h2>Registro de Factura</h2>
    
    <form name="facturas" action= <?php echo $_SERVER["PHP_SELF"];?> method="post">
        
        <!-- Proveedor -->
        <label for="proveedor">Proveedor:</label><br>
        <input type="text" id="proveedor" name="proveedor" required><br><br>

        <!-- Número de factura -->
        <label for="num_factura">Número de factura:</label><br>
        <input type="text" id="num_factura" name="num_factura" size="15" required><br><br>

        <!-- Importe (Base Imponible) -->
        <label for="importe">Importe (€):</label><br>
        <input type="number" id="importe" name="importe" step="0.01" min="0" placeholder="0.00" required><br><br>

        <!-- Tipo de IVA -->
        <label for="iva">Tipo de IVA (%):</label><br>
        <select id="iva" name="iva" required>
            <option value="21" selected>21% (General)</option>
            <option value="10">10% (Reducido)</option>
            <option value="4">4% (Superreducido)</option>
            <option value="0">0% (Exento)</option>
        </select><br><br>

        <!-- Comentarios u observaciones adicionales -->
        <label for="texto">Observaciones / Comentarios:</label><br>
        <textarea id="texto" name="texto" rows="5" cols="50"></textarea><br><br>

        <!-- Campo oculto por si se requiere enviar un dato adicional internamente -->
        <input type="hidden" name="oculto" value="registro_factura">

        <!-- Botones de envío y borrado -->
        <input type="submit" value="Enviar factura">
        <input type="reset" value="Borrar datos">

    </form>

</body>
</html>

<?php
    // Solo ejecutar si pulsamos submit
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        echo "<br>El method que ha usado es: ",$_SERVER['REQUEST_METHOD'],"<br>";

        echo  "Proveedor: ",$_POST['proveedor'],"<br>";
        echo  "Número factura: ",$_POST['num_factura'],"<br>";

        $importe = $_POST['importe'];
        echo "Importe: ", $importe ,"<br>";

        $iva = $_POST['iva'];
        echo "IVA: ", $iva ,"<br>";

        echo  "Texto: ",$_POST['texto'],"<br>";

        // Cálculos
        $totalfactura = $importe+$importe * ($iva/100);
        echo "Total factura: " . $totalfactura,"<br>";
    }

?>