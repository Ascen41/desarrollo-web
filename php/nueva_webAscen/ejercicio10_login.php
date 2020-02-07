<?php
session_start();



//si estan las cookies
    //si las cookies son igual a ascen y computadora
        //guardar la session que permite ir a la pagina privada
        //ir a la pagina privada
function haycookies(){
    if(($cookies=="ascen")&&($cookies=="computadora")){

    }else{
        
    }
}









if(isset($_REQUEST["enviar"])){

        $user=$_REQUEST["usuario"];
     
        $password=$_REQUEST["password"];
        if(($user=="ascen")&&($password=="computadora")){

            echo "entra";
            $_SESSION["login"]=$user;

            
                 //si has marcado el checkbox
                //guadar cookie con user y pass

            header("location:ejercicio10_contacto.php");



        }
        }else{
            echo "Error en el login";
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

            <div id="form">
                <form  method="post">
                    <label for="nom">Nombre:</label>
                    <input type="text" name="usuario" id="">
                    <br>
                    <br>
                    <label for="nom">Password:</label>
                    <input type="password" name="password" id="">
                    <input type="checkbox"name="validar">
                    <input type="submit" value="enviar" name="enviar">
                    
                </form>
            </div>


</body>
</html>

