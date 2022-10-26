<?php
$velocidad = $_POST['velocidad'];
$tiempo = $_POST['tiempo'];

$Operacion = $velocidad * $tiempo;

echo "Distancia Recorrida:". " " .$Operacion."M";
?>