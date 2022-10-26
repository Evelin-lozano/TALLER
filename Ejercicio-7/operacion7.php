<?php
$calificacion = $_POST['calificacion'];
$aprendiz = $_POST['aprendiz'];

if($calificacion>=7){
    echo "Nombre Aprendiz:"." ".$aprendiz." ".$calificacion." "."Aprobado";    
    }else{
    echo "Nombre Aprendiz:"." ".$aprendiz." ".$calificacion." "."Desaprobado";  
}

?>