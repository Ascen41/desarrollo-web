<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php
/* variable con la cadena qeue quiero analizar
1)pasar de string a array "esto es un mensaje para calcular las letras mas repetidas"=>[h,o,l,a,...]
2) array a array de frecuencias => [h=>1,o=>1,l=>1,a=>1...]
3) recorrer el array de frecuencias (Afrec) buscando el maximo y el minimo buscando el "value" maximo y minimo que son los numeros del array de frecuencia, no las letras y a nosotros nos interesan las letras max y min.
4) recorrer el array comparando los "value" con max y min y si encuentra algun max o minimo, añadir un listado de lletras max y min.
*/

/* resultado= letra que mas veces está y letra que menos está*/
       


    //array_count_values( array)
//Calcula la frecuencia de cada uno de los elementos de un array


//foreach($array as $value) { ... }
//foreach($array as $clave=>$valor) { ... }
function devuelveMaxMin($cadena){//que recibe una cadena y me devolvera algo, como me lo devolverá. Iremos puliendo el programa, quitando mayusculas, espacios...
    //la cadena se ha de pasar a un array de frecuencias
$afrec=array_count_values(str_split(str_replace(" ","",preg_replace('/ [\ W] /', '', $cadena))));//esto me devolverá [h=>1,o=>1,l=>1,a=>1...]

    $max=array_values($afrec)[0];//siguiendo el algoritmo maximo y minimo he de comenzar asumiendo un valor maximo y minio, asumiendo que es la primeraletra, no podemos hacer $max=$afrec[0] porque es un array asociativo. entonces usamos array_values
    $min=array_values($afrec)[0];

    foreach($afrec as $valor){
        if($max<$valor) $max=$valor;
        if($max>$valor) $min=$valor;
    }// en esta pasada he encontrado el máximo y el mínimo

    echo "<br>max:$max";
    echo "<br>min:$min";
    $lmax;
    $min;
    foreach($afrec as $letra=>$frecuencia){
        if($frecuencia==$max) $letramax[]=$letra; //la frecuencia es igual al máximo que la letra que acabo d encontrar y esta en $letra es una ded las letras que me interesan y la he de añadir al listado de las palabras de letras maximas. 
        if($frecuencia==$min) $letramin[]=$letra;
}//de esta manerra obtendre una array que tendra las maximas y las minimas
//echo"<br>";
//ptint_r($letramax);
//echo"<br>";
//ptint_r($letramin);


$respuesta=["lista_letras_max"=>$letramax, "lista_letras_min"=>$letramin,"fmax"=>$max,"fmin"=>$min];//crear un array asociativo que tenga en la primera posicion, creando tambien una variable asociativa en la que en la posicion lista de letras máximas le pongo el array que tiene todas las letras 

    return $respuesta;
}
$resultado=devuelveMaxMin("Hola, que tal estas");

echo"<br>La/Las letras que más salen son:";

foreach($resultado["lista_letras_max"] as $letra){
echo $letra.",";
}

echo " y salen un total de ".$resultado["fmax"]. " veces";


echo"<br>La/Las letras que menos salen son:";

foreach($resultado["lista_letras_min"] as $letra){
    echo $letra.",";
    }


echo " y salen un total de ".$resultado["fmin"]. " veces";

?>
</body>
</html>