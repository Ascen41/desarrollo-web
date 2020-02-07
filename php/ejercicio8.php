<?php
/*Función que dada una fecha
-Si está en formato EEUU que nos la
transforme en formato europeo.
- Si está en formato europeo que nos la
transforme en formato EEUU.
- Podremos añadir un parámetro de formato de
fecha
Formato europeo: dd/mm/AAAA
Formato EEUU: mm/dd/AAAA*/
function canviformatdata($data){
    return explode("/", $data)[1]."/".explode("/",$data)[0]."/".explode("/",$data[2]); 
}




?>
