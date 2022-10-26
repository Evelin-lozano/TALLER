<?php
$Volantes= $_POST['Volantes'];
$Posters = $_POST['Posters'];
$Tdepres = $_POST['Tdepres'];

$Vol = $Volantes *2000;
$Pos = $Posters *5000;
$Tde = $Tdepres *500;
$Total= $Vol + $Pos + $Tde;

echo  "Volantes:".$Vol." "."Posters:".$Pos." "."Tdepres:".$Tde." "."Total a pagar:". " ".$Total;

?>