<?php
    // FUNCIONES DE CONVERSIÓN
    function convertirBinario($num) {
        return decbin($num);
    }

    function convertirOctal($num) {
        return decoct($num);
    }

    function convertirHexadecimal($num) {
        // strtoupper -> Letras en mayúsculas
        return strtoupper(dechex($num));
    }

    // LIMPIEZA DE DATOS
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

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