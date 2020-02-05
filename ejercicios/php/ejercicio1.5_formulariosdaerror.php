<?PHP

   /* Con el ejercicio anterior:
    - muestra la cadena que se envía (como antes).
    - Nos dice si todas las palabras de la cadena están
    encadenadas:
    Bicicleta tambor oruga - > SI
    Hola que tal -> NO*/
    //boolean
$frase="bicicleta tambor oruga";
//se ha de pasar a array
if(isset($_REQUEST["submit"])){
    echo"<p>Los datos se han enviado </p>";
    $frase =$_REQUEST["frase"];//creamos la variable cadena que hemos escrito
    print_r("la cadena es: $frase<br>"); // printamos la cadena que hemos escrito
    $arraycadena=explode(" ",$_REQUEST["frase"]);//convertimos la frase en array 
    print_r($arraycadena); // printamos la cadena que hemos escrito y la pasamos a una array
    $longitudcadena= count($arraycadena); //cuenta el numero de elementos de un array en este caso tres palabras
    print_r($longitudcadena);
    for($i=0; $i<$longitudcadena-2; $i++){
        $encadenadas=false;
        if(substr($arraycadena[$i], -2)==substr($arraycadena[$i+1], 0,2)){
            $encadenadas=true;
        }else{
            break;
        }
    }

    if($encadenadas){
        echo"<p>Las palabras estan encadenadas<p>";
    }else{
        echo"<p>Las palabras no estan encandenadas <p>";
    }
}

?>

<html>
<head>
	<title>Palabras encadenadas</title>
	<META charset="utf-8">
	<META name="description" content="your description">
</head>
<body>
<form method="post">
Escribe algo:<input type="text"name="frase"/>
<input type="submit"name="submit"value="enviar">

</form>
</body>
</html>