<!DOCTYPE html>
<html>
<head>
	<title>tabla de multiplicar</title>
	<META charset="utf-8">
	<META name="description"content="your description">
</head>
<style>
table {
	border: solid #047634;
	float: left;
}
</style>
<body>
	<h1>tabla de multriplicar</h1>
<?php
/* Usar “print” o “echo” para que PHP devuelva código HTML.
 Usar Tablas i/o Listas.
 Usar Bucles for i/o while para facilitar la tarea.*/
 $fin=10;
 $numero=1;
 for($i=0;$i<=$fin;$i++){
	echo"<table>";
	 for($j=0;$j<=$fin;$j++){
		$resultado=$i*$j;
		echo"<tr><td>$i x $j=$resultado<td><tr>";
	 }
	 echo"</table>";
 }
 /* otra manera de hacerlo seria
 for($n=0; $n<=10; $i++)
 print("<li>$n x $i =".$n*$i."</li>\h");
 prin("<br>");*/
?>


</body>
</html>