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
            return ("Error la división por 0 no se puede")
        }
        return $op1/$op2;
    }

    //--- RECUPERAMOS LOS DATOS DEL FORMULARIO
    


?>