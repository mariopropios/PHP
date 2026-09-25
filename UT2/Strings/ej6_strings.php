<HTML>
<HEAD><TITLE> EJ6 Strings - Analizador de log de servidor </TITLE></HEAD>
<BODY>
<?php
$log = "192.168.1.25 - GET /productos/listado.php - 200 - Mozilla/5.0";

//Separamos por -> -
$logPartes = explode("-",$log);

//IP
$ip = $logPartes[0];

//Separamos -> [1]GET [2]/productos/listado.php
$partesMetodo = explode(" ",$logPartes[1]);

$metodo = $partesMetodo[1];
$recurso = $partesMetodo[2];

//Agarramos la parte [2]200
$codigo = $logPartes[2];

//Agarramos la parte [3]Mozilla/5.0
$navegador = $logPartes[3];

//VISUALIZAMOS
echo("IP: $ip<br>");
echo("Método: $metodo<br>");
echo("Recurso: $recurso<br>");
echo("Código HTTP: $codigo<br>");
echo("Navegador: $navegador<br><br>");
echo("Tipo de erecurso: ");



?>
</BODY>
</HTML>
