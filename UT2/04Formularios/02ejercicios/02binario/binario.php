<?php
    // FUNCIONES
    function pasarABinario($numeroDecimal) {
        $resultadoBinario = decbin($numeroDecimal);
        return $resultadoBinario;
    }

    // --- LIMPIAMOS EL INPUT DEL HTML
    function test_input($data) {
        $data = trim($data);               // Elimina espacios extra al principio y final
        $data = stripslashes($data);       // Quita las barras invertidas (\)
        $data = htmlspecialchars($data);   // Convierte caracteres especiales en entidades HTML (seguridad)
        return $data;
    }

    // --- RECUPERAMOS LOS DATOS DEL FORMULARIO ---
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $decimal = test_input($_POST["decimal"]);

        // Llamamos a la función
        $binario = pasarABinario($decimal);

        // --- 3. MOSTRAMOS EL RESULTADO DE FORMA VISUAL ---
        echo "<br><h3>Resultado de la conversión</h3>";
        echo "<p>Número Decimal: $decimal</p>";
        echo "<p>Número Binario: $binario</p>";
    }



?>