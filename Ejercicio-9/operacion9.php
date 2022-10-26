<?php
$asignatura = $_POST['asignatura'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$notae1= $nota1*30;
$notae2= $nota2*30;
$notae3= $nota3*40;
$cdefinitiva= $notae1+ $notae2+$notae3;

if($cdefinitiva>=4.0){
    echo "Asignatura:"." ".$asignatura." "."Aprobado";    
    }else{
    echo "Asignatura:"." ".$asignatura." "."Desaprobado";  
}
 
?>