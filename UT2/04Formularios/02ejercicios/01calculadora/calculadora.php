<?php
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


?>