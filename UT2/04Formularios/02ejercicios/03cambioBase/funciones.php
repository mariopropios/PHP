<?php
// --- FUNCIÓN DE LIMPIEZA DE DATOS ---
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// --- FUNCIONES DE CONVERSIÓN ---
function convertirBinario($num) {
    return decbin($num);
}

function convertirOctal($num) {
    return decoct($num);
}

function convertirHexadecimal($num) {
    return strtoupper(dechex($num));
}
?>