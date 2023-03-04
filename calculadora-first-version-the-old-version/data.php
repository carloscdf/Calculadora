<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$operador = $_POST["operador"];
$resultado = 0;



if($operador == "+") {
    $resultado = $n1+$n2;

    echo  "Soma:".$resultado;
}

else if($operador == "-") {
    $resultado = $n1-$n2;

    echo  "Subtração:".$resultado;
}

else if($operador == "/") {

    if($n2 ==  0) {
        echo "Não é divisível por 0";
    }
    else {
    $resultado = $n1/$n2;

    echo  "Divisão:".$resultado;
}
}

else if($operador == "*") {
    $resultado = $n1*$n2;

    echo  "Multiplicação:".$resultado;
}
