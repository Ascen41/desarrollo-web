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
/*• Ejercicio 10: Descripción de un producto
- Formulario que permita:
- Nombre del producto
- Descripción
- Precio
- Imagen del producto
- Fecha actual (campo oculto: lo podemos añadir como
hidden o no añadir en el form pero si debe aparecer en
el resumen de la información)
- Si se sube correctamente la información, se muestra por
pantalla*/

if (isset($_REQUEST["enviar"])){
        $nombre=$_REQUEST["nombre"];
        $descripcion=$_REQUEST["descripcion"];
        $precio=$_REQUEST["precio"];

        $direcficheros="img/";
        $fichero=$direcficheros.basename($_FILES["img"]["name"]);

        if(move_uploaded_file($_FILES["img"]["tmp_name"],$direcficheros.
        $fichero)){
    echo " ";
    echo " ";
    echo " ";
        }else{
        print("No se ha podido subir el fichero\n");
        }
   
?>

	<h1> Formulario de registro</h1>
    <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        <label for="nombre"><strong>Nombre del producto</strong></label>
        <input id="producto" type="text" name="nombre"> 
    <br>
    <br>
        <label for="descripcion"><strong>Descripcion</strong></label>
        <input id="desprod" type="text" name="descripcion">
    <br>
    <br>
        <label for="precio"><strong>Precio</strong></label>
        <input id="pvp" type="text" name="precio">
    <br>
    <br>
        <input id="img"  type="file" name="imagen">
    <br>
    <br>
        <input type="hidden" name="fecha" value="<?=date("ymd")?>">
    <br>
    <br>
        <label for="Comentarios">Descripcion</label>
        <textarea name="comentarios" rows="2" cols="60">
        </textarea>
    <br>
    <br>
        <input type="submit" name="enviar" value="Enviar" />
  
    </form>




</body>
</html>    
<?php
}

?>