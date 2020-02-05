<?php
/* Si la hora se encuentra entre las 8 y las 13, mostrará ‘Buenos
días’
Si la hora se encuentra entre las 14 y las 20, mostrará ‘Buenas
tardes’
Si la hora se encuentra entre las 21 y las 7, mostrará ‘Buenas
noches’
Podemos obtener la hora actual de la siguiente manera:
$hora = date ("H") o  $hora = date ("G") ;*/

/*$hora=date("H");*/
/*es para definir hola hora en el tiempo real*/
/*$hora="15"; para definir una hora en concreto
$hora = date ("H");*/
/*if($hora>=8 && $hora<=13){
    echo "Buenos días";   
}
else if($hora>=14 && $hora<=20){
    echo "Buenas tardes";
}
else if($hora>=21 && $hora<=7){
    echo "Buenas noches";
}*/
$hora= 3;

$a=[8=>"buenos días",9=>"buenos días",10=>"buenos días",11=>"buenos dias",12=>"buenos dias",13=>"buenos dias",14=>"buenas tardes",15=>"buenas tardes", 16=>"buenas tardes",17=>"buenas tardes",18=>"buenas tardes",19=>"buenas tardes", 20=>"buenas tardes",21=>"buenas noches",22=>"buenas noches",23=>"buenas noches",00=>"buenas noches",1=>"buenas noches",2=>"buenas noches",3=>"buenas noches",4=>"buenas noches",5=>"buenas noches",6=>"buenas noches",7=>"buenas noches"];



foreach ($a as $h=>$mensaje) {
    
    if($h==$hora) echo $mensaje;

}
?>