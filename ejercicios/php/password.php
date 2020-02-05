<?php

$password="12345";
// lo hemos pasado a MD5
if(sha1(md5($password)=="fe703d258c7ef5f50b71e06565a65aa07194907f")){
    echo "BIEN";

}else{
    echo"MAL";
}

//la contraseña que nos hasn pasado dla hemos de codificar con md5 

?>