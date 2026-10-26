<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio cambio base</title>
</head>
<body>
    <h2>CONVERSOR NUMERICO</h2>

    <form name="cambiobase" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
        <!-- Operador 1 -->
        <label for="decimal">Número Decimal:</label><br>
        <input type="number" id="decimal" name="decimal" required><br><br>
        
        <!-- Selección de operación -->
        <p>Convertir a:</p>
        <input type="radio" id="binario" name="sistema" value="binario" checked>
        <label for="binario">Binario</label><br>

        <input type="radio" id="octal" name="sistema" value="octal">
        <label for="octal">Octal</label><br>

        <input type="radio" id="hexadecimal" name="sistema" value="hexadecimal">
        <label for="hexadecimal">Hexadecimal</label><br>

        <input type="radio" id="todos" name="sistema" value="todos">
        <label for="todos">Todos los sistemas</label><br><br>

        <!-- Botones de enviar y borrar -->
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form>
</body>
</html>

<?php
    // FUNCIONES (importamos)
    include "funciones.php";

    // PROCESSAMIENTO DE DATOS
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimal = test_input($_POST["decimal"]);
        $sistema = $_POST["sistema"];

        echo "<br><h3>Resultado de la conversión</h3>";
        echo "<p>Número Decimal: $decimal<br>";

        // --- 4. SELECCIÓN MEDIANTE SWITCH ---
        switch ($sistema) {
            case "binario":
                $binario = convertirBinario($decimal);
                echo "Número Binario: $binario<br>";
                break;

            case "octal":
                $octal = convertirOctal($decimal);
                echo "Número Octal: $octal<br>";
                break;

            case "hexadecimal":
                $hex = convertirHexadecimal($decimal);
                echo "Número Hexadecimal: $hex<br>";
                break;

            case "todos":
                $binario = convertirBinario($decimal);
                $octal = convertirOctal($decimal);
                $hex = convertirHexadecimal($decimal);
                    
                echo "Número Binario: $binario<br>";
                echo "Número Octal: $octal<br>";
                echo "Número Hexadecimal: $hex<br>";
                break;
            default:
                echo "Selecciona un sistema válido";
                break;
                    
        }
    }
?>