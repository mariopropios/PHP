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
?>