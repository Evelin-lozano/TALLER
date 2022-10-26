<?php
$H1 = $_POST['H1'];
$H2 = $_POST['H2'];


if($H1>$H2){
  $Operacion = $H1 - $H2;
   
      echo "El hermano mayor es"." ".$H1." "."Diferencia de edad:". " " .$Operacion;  
    
}else{  
  $Operacion = $H2 - $H1; 
    echo "El hermano mayor es"." ".$H2." "."Diferencia de edad:". " " .$Operacion;
}
?>