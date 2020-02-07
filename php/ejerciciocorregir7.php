<?php
date_default_timezone_set("Europe/Berlin");
/*Función que dado dos fechas:
-Nos diga cual es la mayor de las dos*/
/*$fecha1 = strtotime(date("j/n/Y H:i:00"));
$fecha2 = strtotime("25-01-2013 18:50:00");
saber que formato horarios tiene mi windows
Hacer un php info para ver que formati de horario tiene mi ordenador.
strtotime()
Convierte una fecha en un timestamp de UNIX
•Ejemplo:
$fecha= date ("j/n/Y", strtotime(“5 april 2001"));
print("$fecha");
Resultado:
5/4/2001
*/
$fecha1 = strtotime("18 december 1978");
$fecha2 =  strtotime("25 january 2013");

echo $fecha1;
//no llamo a la funcion 
// no trato lo que devuelve la funcion
//la funcion que devuelve un booleano no modifica
function solucion($fecha1, $fecha2){
    $respuesta=false;
if($fecha1 < $fecha2){
    //$respuesta=true
    echo "es mayor" (date("d-m-Y",$fecha1));
}else{
	echo "La fecha menor";
        }
return $respuesta;  
    }
/* EN FUNCIÓN DE SI ES BOOLEANO, DEBERÍA HABER UNA VARIABLE QUE LA LLAME E IMPRIMA LOS ECHOS QUE SE HAN AÑADIDO EN EL CASO IF/ELSE
$fechasss = solucion($fecha1,$fecha2);
print $fechasss
*/

?>