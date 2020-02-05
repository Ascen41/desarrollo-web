<!DOCTYPE html>
<html>
<head>
	<title>tabla de multiplicar</title>
	<META charset="utf-8">
	<META name="description"content="your description">
</head>

<body>
<?php
/*programa que, de 10 elementos enteros, los almacena en un array
y encuentra:
- El sumatorio de estos elementos.
- El máximo.
- El mínimo.*/
/*$array=[0,1,2,3,4,5,6,7,8,9,10];*/
$numeros=array();

for($i=0;$i<10;$i++){
    $numeros[]=rand(0,100);
}
    echo "<br>contenido del array:<br>";
    print_r($numeros);

    //suma
    $suma=0;
    foreach($numeros as $numero){
        $suma=$suma+$numero;
    }
echo "<br>la suma es: ".$suma." comparado con".array_sum($numeros);;

//maximo
$max=$numeros[0];
foreach($numeros as $numero){
    if($numero>$max){
        $max=$numero;
    }
}
echo"<br>El maximo es ".$max." comparado con".max ($numeros);

//minimo
$min=$numeros[0];
foreach($numeros as $numero){
    if($numero<$min){
        $min=$numero;
    }
}
echo "<br>Todo a la vez <br>";

$suma=0;
$max=$numeros[0];
$min=$numeros[0];


?>
</body>
</html>