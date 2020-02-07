<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ejercicio 8 validacion de formulario</title>
</head>
<body>
<?php
    $nombre = $apellidos = $edad = $email= $comentarios = "";
    $nombreError= $apellidosError= $edadError= $EmailError="";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

         return $data;
}   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//        $nombre = test_input($_POST["nombre"]);
        if (empty($_POST["nombre"])) {
            $nombreError = "El nombre es obligatorio";
          } else {
            $nombre = test_input($_POST["nombre"]);
            //el nombre solo tiene letras y espacios
            if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
              $nombreError = "sólo permite letras y espacios en blanco";
            }
          }
        $apellidos = test_input($_POST["apellidos"]);
        if (empty($_POST["apellidos"])) {
            $apellidosError = "El apellido es obligatorio";
          } else {
            $apellidos = test_input($_POST["apellidos"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$apellidos)) {
              $apellidosError = "sólo permite letras y espacios en blanco";
            }
          }
        $edad = test_input($_POST["edad"]);
        if( (isset($_POST["edad"]) ) && (!empty($_POST["edad"])) )
            {
                if( !empty($_POST["edad"]&& $edad<18)){
                    $edadError = "debes ser mayor de 18 años";
            }
        $email = test_input($_POST["email"]);
        if (empty($_POST["email"])) {
            $EmailError = "Email es obligtorio";
          } else {
            $email = test_input($_POST["email"]);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $EmailError = "formato erroneo";
            }
          }
        $comentarios = test_input($_POST["comentarios"]);
}

    
}  
?>

	<h1> Formulario de registro</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <label for="nombre"><strong>Nombre:</strong>
        <input id="lnombre" type="text" name="nombre" maxlength="50" size="50" value="<?=$nombre;?>"></label>
        <p><?=$nombreError;?></p>
        
    <br>
    <br>
        <label for="apellido1"><strong>Apellidos:</strong>
        <input id="lapellidos" type="text" name="apellidos" maxlength="50" size="50"value="<?=$apellidos;?>"></label>
        <p><?=$apellidosError;?></p>
      
    <br>
    <br>
        <label for="edad"><strong>Edad:</strong>
        <input id="ledad" type="text" name="edad" maxlength="50" size="50"value="<?=$edad;?>"></label>
        <p><?=$edadError;?></p>
       
    <br>
    <br>
        <label for="email"><strong>Correo electrónico </strong>
        <input id="lemail"  type="email" name="email" value="<?=$email;?>"> </label>
        <p><?=$EmailError;?></p>
       
    <br>
    <br>
        <label for="Comentarios">Comentarios</label>
        <textarea name="comentarios" rows="2" cols="60">
        </textarea>
    <br>
    <br>
        <input type="submit" name="enviar" value="Enviar este formulario" />
  
    </form>
    <?php


?>



</body>
</html>