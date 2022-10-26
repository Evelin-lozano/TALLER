<?php
$Pganados= $_POST['P-ganados'];
$Pperdidos = $_POST['P-perdidos'];
$Pempatados = $_POST['P-empatados'];

$ganados = $Pganados *3;
$perdidos = $Pperdidos *0;
$empatados = $Pempatados *1;
$Resultado= $ganados + $perdidos + $empatados;

echo "Total de puntos:". " ".$Resultado;

?>