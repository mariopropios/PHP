<?php

$nombre = "Carlos";
$rol = "Programador";

// Las comillas simples son literales. PHP no busca variables ni procesa caracteres especiales.
echo "=== 1. USO DE COMILLAS SIMPLES (') ===\n";
echo 'Hola, $nombre. Tu rol es $rol.' . "\n";

// Imprime: Hola, $nombre. Tu rol es $rol.
// Nota: "\n" al final para poder hacer un salto de línea en la consola.

// Imprime: El texto contiene un salto de línea literal \n aquí mismo.
echo 'El texto contiene un salto de línea literal \n aquí mismo.' . "\n\n";

// Las comillas dobles interpretan las variables (interpolación) y los caracteres de escape como \n.
echo "=== 2. USO DE COMILLAS DOBLES (\") ===\n";

echo "Hola, $nombre. Tu rol es $rol.\n";
// Imprime: Hola, Carlos. Tu rol es Programador. Salto de línea automáticamente gracias al \n

// También puedes usar llaves {} para delimitar la variable si el texto está pegado a ella
echo "Eres el {$rol} principal de la empresa.\n\n";


echo "=== 3. CASOS DE USO COMUNES ===\n";

?>