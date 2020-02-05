<!DOCTYPE html>
<html>
<head>
	<title>Tabla de multiplicar</title>
	<META charset="utf-8">
	<META name="description"content="your description">
</head>

<body>
<?php

/*function suma ($x, $y)
{
    ?????
    } 
    $a=1;
    $b=2;
    $c=suma($a, $b);
    print $c;
    Lo mismo para restar, multiplicar y dividir.*/

/*function suma($x,$y){
    $sumar=$x+$y;
    return "el resultado de la suma es ". $sumar;
}
    $a=1;
    $b=2;
    $s=suma($a, $b);
    print $s;

   echo "<br>";

function multiplicar($x,$y){
    $multiplicar=$x*$y;
    return "el resultado de la multiplicacion es ". $multiplicar;
}
    $a=1;
    $b=2;
    $m=multiplicar($a, $b);
    print $m;

    echo "<br>";

function dividir($x,$y){
        $dividir=$x/$y;
        return "el resultado de la division es ". $dividir;
    }
    $a=1;
    $b=2;
    $d=dividir($a, $b);
    print $d;*/
    function operaciones($n1, $n2, $operacion){
        $resultado = 0;
        if($operacion == "Sumar") {
            $resultado = $n1+$n2;
        }else if($operacion =="Restar"){
            $resultado =$n1-$n2;
        }else if($operacion =="Multiplicar"){
            $resultado =$n1*$n2;
        }else if($operacion == "Dividir"){
            $resultado =$n1/$n2;
        }
        return $resultado;
    }
$a=1;
$b=2;
$o=operaciones($a,$b, "Sumar");
print "La suma es: $o </br>";
$o=operaciones($a, $b,"Restar");
print "La resta es: $o </br>";
$o=operaciones($a, $b, "Multiplicar");
print "La multiplicacion es: $o </br>";
$so=operaciones($a,$b, "Dividir");
print "La division es: $o </br>";

?>


</body>
</html>