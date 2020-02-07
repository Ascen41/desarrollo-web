<?php
/* variable con la cadena qeue quiero analizar
1)pasar de string a array "esto es un mensaje para calcular las letras mas repetidas"=>[e,s,to,...]
2) array a array de frecuencias => 
3) recorrer el array de frecuencias buscando el maximo y el minimo buscando el "value" max y min
4) recorrer el array comparando el "value" con max y min si encuentra algun maz o minimo añadiendo un listado de lletras max y min.
*/

$cadena="Esto es un mensaje para calcular las letras mas repetidas";

function retornaMaxyMin($cadena){
    $afreq=array_count_values(str_split($cadena));

    $max=array_values($afreq)[0];
    $min=array_values($afreq)[0];

    foreach($afreq as $valor){
        if($max<$valor)$max=$valor;
        if($min>$valor)$min=$valor;
    }
    //echo"<br>max:$max";
    //echo"<br>min:$min";
    $lmax;
    $lmin;
    foreach($afreq as $letra=>$cantidad){
        if($cantidad==$max)$lmax=$letra;
        if($cantidad==$min)$lmin=$letra;
    }
    echo"<br>";
    print_r($lmax);
    echo"<br>";
    print_r($lmin);
 
    return "";
}
$resultado=retornaMaxiMin("Esto es un mensaje para calcular las letras mas repetidas");

echo"<br> Las letras que mas salen son:". $resultado;

/* resultado= letra que mas veces está y letra que menos está*/
       


    //array_count_values( array)
//Calcula la frecuencia de cada uno de los elementos de un array


//foreach($array as $value) { ... }
//foreach($array as $clave=>$valor) { ... }
?>