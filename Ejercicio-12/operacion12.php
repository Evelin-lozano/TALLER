<?php
$capitalI = $_POST['capitalI'];
$tasa1= $capitalI+($capitalI*0.02);
$tasa2= $capitalI+($capitalI*0.045);
$tasa3= $capitalI+($capitalI*0.07);



if($capitalI<500){
    echo "Capital ingresado: ".$capitalI." "."Total del capital + intereses: ".$tasa1;    
    }
elseif($capitalI>=500 && $capitalI<=1500){
    echo "Capital ingresado: ".$capitalI." "."Total del capital + intereses: ".$tasa2; 
}if($capitalI>=1500){
    echo "Capital ingresado: ".$capitalI." "."Total del capital + intereses: ".$tasa3;  
}
 
?>