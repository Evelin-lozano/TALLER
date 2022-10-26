<?php
$edad = $_POST['edad'];
$Sexo = $_POST['Sexo'];


if($edad>=63 && $Sexo=="Masculino"){
    echo "Jubilación"; 

}elseif($edad>54 && $Sexo=="Femenino"){
    echo "Jubilación";

}else{
    echo "No-jubilación";   
}
?>