<?php
/*• Función que:
- Reciba un string
- Compare si el string dado es igual a la
contraseña almacenada
- Si lo es: mensaje en verde, todo correcto.
- Si no lo es: mensaje en rojo, contraseña
incorrecta.*/
// lo hemos pasado a MD5

$str="computadora";

if(md5($str)=="6da6039345d71593a6ab4b3b887d06fc"){
    echo "La contraseña es correcta";

}else{

   echo "la contraseña no es correcta";
}


//la contraseña que nos hasn pasado la hemos de codificar con md5 

?>