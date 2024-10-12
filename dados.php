<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

$dado=array("1"=>"&#9856","2"=>"&#9857","3"=>"&#9858", "4"=>"&#9859", "5"=>"&#9860", "6"=>"&#9861" );


function tiradas($dado){
$jugador=array();
for ($i=0; $i <=5 ; $i++) { 
$jugador[$i]=$dado[rand(1,6)];
}   
return $jugador;
}
$jugador1 =tiradas($dado);
$jugador2 =tiradas($dado);

function contar($n1): int{
    $contar=0;
    $mayor=1;
    $menor=6;
    $excluida=0;
foreach ($n1 as $valor) {
    if ($valor=="&#9856") { 
        $contar+=1;
        $excluida=1;
        if ($mayor<$excluida) {
            $mayor=$excluida;
        }
        if ($menor>$excluida) {
            $menor=$excluida;
        }
    }
    if ($valor=="&#9857") { 
        $contar+=2;
        $excluida=2;
        if ($mayor<$excluida) {
            $mayor=$excluida;
        }
        if ($menor>$excluida) {
            $menor=$excluida;
        }
    }
    if ($valor=="&#9858") { 
        $contar+=3;
        $excluida=3;
        if ($mayor<$excluida) {
            $mayor=$excluida;
        }
        if ($menor>$excluida) {
            $menor=$excluida;
        }
    }
    if ($valor=="&#9859") { 
        $contar+=4;
        $excluida=4;
        if ($mayor<$excluida) {
            $mayor=$excluida;
        }
        if ($menor>$excluida) {
            $menor=$excluida;
        }
    }
    if ($valor=="&#9860") { 
        $contar+=5;
        $excluida=5;
        if ($mayor<$excluida) {
            $mayor=$excluida;
        }
        if ($menor>$excluida) {
            $menor=$excluida;
        }
    }
    if ($valor=="&#9861") { 
        $contar+=6;
        $excluida=6;
        if ($mayor<$excluida) {
            $mayor=$excluida;
        }
        if ($menor>$excluida) {
            $menor=$excluida;
        }
    }


}  
return $contar-$mayor-$menor; 
}
$resultado1 = contar($jugador1);
$resultado2= contar($jugador2);
echo "dados del jugador 1:\n".$resultado1." <br> ";

foreach($jugador1 as $valor) {
    echo $valor;
}
echo "<br> dados del jugador 2:\n".$resultado2."<br> ";

foreach($jugador2    as $valor) {
    echo $valor;
}
echo "<br>";
if ($resultado1>$resultado2) {
    echo "gana el jugador 1";
}
elseif($resultado1<$resultado2) {
    echo "gana el jugador 2";
}
else{echo "tablas";}

?>
</body>
</html>