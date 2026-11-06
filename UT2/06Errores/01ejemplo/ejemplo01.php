<?php
    //error handler function
    function customError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr";
        if($errno == 2){
            echo "El campo xxx está vacio";
        }
    }

    //set error handler
    set_error_handler("customError");

    //trigger error
    echo($test);
    
    //---------------------------------------------
    //trigger error
    $campo = 2;
    if($campo>=1){
        trigger_error("Valor debe de ser mayor o igual que 1");
    }
?>