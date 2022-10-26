<?php
$costo = $_POST['costo'];
$vender= $costo+($costo*0.15);

if($costo){
    echo "Vendalo en: ".$vender;    
    }
 
?>