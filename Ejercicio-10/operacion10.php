<?php
$precio = $_POST['precio'];
$preciod= $precio-($precio*0.2);

if($precio>=20000){
    echo "Total a pagar: ".$preciod;    
    }else{
        echo "Total a pagar: ".$precio;  
}

?>