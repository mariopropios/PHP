<?php
    function gestionError($errno, $errstr) {
        echo "<b>Error:</b> [$errno] $errstr";
    }

    //set error handler
    set_error_handler("gestionError");

?>