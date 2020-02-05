<?php
/* 
for($i=0;$i<10;$i++){
    echo "<br>$i";

}
$a=[0,2,3,4];
$b=["rojo"=>"ff000","verde"=>"00ff00","azul"=>"0000FF"];
print_r($a);
print_r($b);

foreach ($b as $trtrtrtr=>$valor) {
    echo "<br>";
    print_r($trtrtrtr);
    echo "<br>";
    print_r($valor);
}


$i=5;
while($i<8){
    echo $i++."<br>";
}

$i=8;
do{
    echo "<br>".$i++."<br>";

}while($i<8);

 */

$a=rand(1,8);
echo "<br>En aquesta situació a val $a<br>";
switch($a){

    case 3:{ echo "<br>gfsdgfsd<br>"; break;}
    case 4:{ echo "<br>gfdgsdfg<br>"; break;}
    case 1:{ echo "<br>gsfdgfsdgdfg<br>"; break;}
    case 2:{ echo "<br>gfdgsdfgdf<br>"; break;}

    default: { echo $a;break;}



}




?>