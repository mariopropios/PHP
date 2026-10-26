<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio calculadora</title>
</head>
<body>
    <h2>CALCULADORA</h2>

    <form name="calculadora" action=<?php echo $_SERVER["PHP_SELF"];?> method="post">
        <!-- Operador 1 -->
        <label for="proveedor">Operando1:</label><br>
        <input type="number" id="operando1" name="operando1" required><br><br>
        
        <!-- Operador 2 -->
        <label for="proveedor">Operando2:</label><br>
        <input type="number" id="operando2" name="operando2" required><br><br>
        
        <!-- Selección de operación -->
        <p>Selecciona la operación:</p>
        <input type="radio" id="suma" name="operacion" value="suma" checked>
        <label for="suma">Suma</label><br>

        <input type="radio" id="resta" name="operacion" value="resta">
        <label for="resta">Resta</label><br>

        <input type="radio" id="producto" name="operacion" value="producto">
        <label for="producto">Producto</label><br>

        <input type="radio" id="division" name="operacion" value="division">
        <label for="division">Division</label><br><br>

        <!-- Botones de enviar y borrar -->
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //--- FUNCIONES DE LAS OPERACIONES
    function sumar($op1,$op2){
        return $op1+$op2;
    }

    function restar($op1,$op2){
        return $op1-$op2;
    }

    function producto($op1,$op2){
        return $op1*$op2;
    }

    function division($op1,$op2){
        if($op2 == 0){
            return ("Error la división por 0 no se puede");
        }
        return $op1/$op2;
    }

    //--- RECUPERAMOS LOS DATOS DEL FORMULARIO
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $op1 = $_POST["operando1"];
        $op2 = $_POST["operando2"];
        $operacion = $_POST["operacion"];

        $resultado = 0;
        $signo = "";

        // --- EVALUAMOS QUÉ OPERACIÓN SE SELECCIONÓ
        switch ($operacion) {
            case "suma":
                $resultado = sumar($op1, $op2);
                $signo = "+";
                break;
            case "resta":
                $resultado = restar($op1, $op2);
                $signo = "-";
                break;
            case "producto":
                $resultado = producto($op1, $op2);
                $signo = "*";
                break;
            case "division":
                $resultado = division($op1, $op2);
                $signo = "/";
                break;
            default:
                $resultado = "Operación no válida";
                break;
        }
    }

        // --- VISUALIZAR RESULTADO
        echo "<p>Resultado operación: $op1 $signo $op2 = $resultado</p>";

}
    
?>