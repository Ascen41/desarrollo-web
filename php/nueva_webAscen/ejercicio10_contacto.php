<?php

session_start();



if(!isset($_SESSION["login"])){

    header("location:ejercicio10_login.php");


}
if(isset($_REQUEST["logout"])){
    session_start();
    $_SESSION[]=null;
    session_destroy();
    header("location:ejercicio10_login.php");

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


    Bienvenido a la pagina privada <?=$_SESSION["login"]?>
    
    <a href="logout.php">logaut</a>
</body>
</html>
