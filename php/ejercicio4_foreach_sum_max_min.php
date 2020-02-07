<?php

// carga_valores($long):array
//suma_total($array):int
//maximo($array):int
//minimo($array): int*/

function carga_valores($long){
        for($i=0;$i<$long;$i++){
                $array[]=rand(0,100);    
        }
        echo "<br>Contenido del array:<br>";
        return($array);
}
$myarray=carga_valores(10);// para tener el array en una variabla !!!importante!!!!
print_r($myarray);// me pinta la array

/*$numeros=array();

for($i=0;$i<10;$i++){
        $numeros[]=rand(0,100);

}
echo "<br>Contenido del array:<br>";
print_r($numeros);*/


//suma

function suma_total($array){
        $suma=0;
        foreach($array as $numero){
                $suma=$suma+$numero;
        } 
        return $suma;
}
echo "<br> La suma total es ";
print_r(suma_total($myarray));

/*$suma=0;

foreach($numeros as $numero){
        $suma=$suma+$numero;
}   

echo "<br>La suma es:".$suma." comparado con ".array_sum($numeros);;*/


//máximo
function maximo($array){
        $max=$array[0];
        foreach($array as $numero){
                if($numero>$max){
                        $max=$numero;
                }
               
        }
        return $max;
}
echo "<br> El maximo es ";
print_r(maximo($myarray));

/*$max=$numeros[0];
foreach($numeros as $numero){
        if($numero>$max){
                $max=$numero;
        }
}
echo "<br>El máximo es ".$max." comparado con ".max($numeros);*/

//mínimo

function minimo($array){
        $min=$array[0];
        foreach($array as $numero){
                if($numero<$min){
                        $min=$numero;
                }
                
        }
        return $min;
}
echo "<br> El minimo es ";
print_r(minimo($myarray));

/*$min=$numeros[0];
foreach($numeros as $numero){
        if($numero<$min){
                $min=$numero;
        }
}
echo "<br>El mínimo es ".$min." comparado con ".min($numeros);;



echo "<br>Todo a la vez<br>";



$suma=0;
$max=$numeros[0];
$min=$numeros[0];


foreach($numeros as $numero){
        $suma=$suma+$numero;
        if($numero>$max){
                $max=$numero;
        }
        if($numero<$min){
                $min=$numero;
        }
}   

echo "<br>La suma es:".$suma." comparado con ".array_sum($numeros);;
echo "<br>El máximo es ".$max." comparado con ".max($numeros);
echo "<br>El mínimo es ".$min." comparado con ".min($numeros);;




echo "<br><br>";*/


/*//suma
$suma=0;
for($i=0;$i<count($numeros);$i++){
        $suma=$suma+$numeros[$i];
}
echo "<br>La suma es:".$suma." comparado con ".array_sum($numeros);
//max
$max=$numeros[0];
for($i=0;$i<count($numeros);$i++){
        if($numeros[$i]>$max) $max=$numeros[$i];
}
echo "<br>El máximo es ".$max." comparado con ".max($numeros);

//min
$min=$numeros[0];
for($i=0;$i<count($numeros);$i++){
        if($numeros[$i]<$min) $min=$numeros[$i];
}
echo "<br>El mínimo es ".$min." comparado con ".min($numeros);

echo "<br><br>";

$i=0;
$min=$numeros[0];
$max=$numeros[0];
$suma=0;



while($i<count($numeros)){
        //calculo del máximo,mínimo,suma...
        $suma=$suma+$numeros[$i];
        if($numeros[$i]>$max) $max=$numeros[$i];
        if($numeros[$i]<$min) $min=$numeros[$i];
        $i++;
}



echo "<br>La suma es:".$suma." comparado con ".array_sum($numeros);;
echo "<br>El máximo es ".$max." comparado con ".max($numeros);
echo "<br>El mínimo es ".$min." comparado con ".min($numeros);;*/


?>
