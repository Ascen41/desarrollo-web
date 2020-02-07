<?PHP

$password="6da6039345d71593a6ab4b3b887d06fc";

if(isset($_REQUEST["enviar"])){
    echo "<p>Contenido enviado</p>";
    if(md5($_REQUEST["password"])==$password){
        echo "password correcto";  
    }else{ 
    echo"pasword incorrecto";
    }
}else{



?>

<!DOCTYPE html>
<html>
<head>
	<title>Comparativa de reproductores MP3</title>
	<META charset="utf-8">
	<META name="description" content="your description">
</head>
<body>
   <!--• Formulario con campo de texto que:
- si se han enviado los datos se procesan,
- sino se muestra el formulario.-->
	<h1> Formulario de registro</h1>
<form method="post">
	<label for="nom">Nombre:</label>
	<input id="nom" type="test"name="nom"/>
<br>
<br>
	<label for="Apellidos">Apellidos: </label>
    <input id="apellidos"type="test"name="apellidos"/>
<br>
<br>
    <label for="Password">Password:</label>
    <input id="pasword"type="password"name="password"/>
<br>
<br>
<input type="submit" name="enviar"value="Enviar formulario" />
</body>
</html>

<?php
}
?>