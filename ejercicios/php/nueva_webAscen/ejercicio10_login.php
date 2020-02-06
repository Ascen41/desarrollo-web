<?php

session_start();

$str=isset($_REQUEST["password"])?$_REQUEST["password"]:"";


function passok($str){
if(md5($str)=="6da6039345d71593a6ab4b3b887d06fc"){
    

}else{

   echo "la contraseña no es correcta";
}


if(isset($_REQUEST["enviar"])){
    
        $_SESSION["login"]=$_REQUEST["nom"];
        header("location:ejercicio10_contacto.php");       
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
    <form  method="post">
    <label for="nom">Nombre:</label>
    <input type="text" name="nom" id="">
    <br>
    <br>
    <label for="nom">Password:</label>
    <input type="password" name="password" id="">
    <input type="submit" value="enviar" name="enviar">

    </form>
</body>
</html>

