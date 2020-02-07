<?php
date_default_timezone_set("Europe/Berlin"); 
//strtotime — Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
/*Función que dado dos fechas:
-Nos diga cual es la mayor de las dos*/
/*$fecha1 = strtotime(date("j/n/Y H:i:00"));
$fecha2 = strtotime("25-01-2013 18:50:00");
saber que formato horarios tiene mi windows
Hacer un php info para ver que formati de horario tiene mi ordenador.

$fechafinal1= date("d-m-Y H:i:s");
echo "<br>". $fechafinal1;
$fechafinal2= date("d-m-Y H:i:s");
echo "<br>". $fechafinal2;


    if($fechafinal1 > $fechafinal2)
	{
	echo "$fechafinal1 es mayor a $fechafinal2";
	}else
		{
		echo "La fecha comparada es igual o menor";
        }*/
// phpinfo(); 
/*Si fecha 1 es mas rrande que fecha 2, devuelve 1
Si fecha2 es mas grande que fecho 1 devuleve 2
si son iguales devuleve 0

*/
/*definire que hará esta funhción

si fecha 1 es mas grande que fecha 2, devuelve 1 
si fecha 2 es más grande que fecha 1, devuelve 2 
sin son iguales devuelve 0
es importante documentar cada funcion que hacemos paara poder identificarla a pesar de los años, que parametros recibe y que parametros devuelve en este caso es importante especiicar el formato de las fechas
recibe 2 parámetros, fechas, en formato "dd-mm-aaa"
lo haremos a lo bruto, sin saber que hay funciones
*/
function quefechaesmasgrande($data1,$data2){

    $respuesta=0;

    $dia1=explode("-", $data1)[0];
    $mes1=explode("-", $data1)[1];
    $año1=explode("-", $data1)[2];

    $dia2=explode("-", $data2)[0];
    $mes2=explode("-", $data2)[1];
    $año2=explode("-", $data2)[2];

    if($año1>$año2){
        $respuesta=1;
    }else if($año1<$año2){
        $respuesta=2;
    }else if($año1==$año2){
        if($mes1>$mes2) {
        $respuesta=1;
    }else if($mes1<$mes2){
        $respuesta=2;
    }else if($mes1==$mes2){
        if($dia1>$dia2){
            $respuesta=1;
        }else if($dia1<$dia2){
            $respuesta=2;
        }else if($dia1==$dia2){
            $rspuesta=0;
        }
    }
    return $respuesta;
}  
   
  


    $respuesta=quefechaesmasgrande("11-12-2024","11-11-2020");
    switch($reespuesta){
        case 1:{ echo " fecha1 es mas grande"; break;}
        case 2:{ echo " fecha2 es mas pequeña"; break;}
        case 3:{ echo " fecha1 es igual a fecha2"; break;}
    }
}

?>