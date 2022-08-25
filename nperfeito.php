<?php

// 6 . Um número é dito perfeito quando ele é igual a soma de seus fatores. Por exemplo, os fatores de 6 são 1, 2 e 3 (ou seja, podemos dividir 6 por 1, por 2 e por 3) e 6=1+2+3, logo 6 é um número perfeito. Escreva uma função que recebe um inteiro e dizer se é perfeito ou não. Em outra função, peça um inteiro n e mostre todos os números perfeitos até n.

//primeira parte

function nperfeito($n){
    $perfeito = 0;
    for($i=1; $i<$n; $i++){
        if($n%$i==0){
             $perfeito+=$i;           
        }
    }
    if($n==$perfeito){
        return True;
    }else{
        return False;
    }
    
}

xdebug_break();

$num = (int)readline("enter a number: ");
$bool = nperfeito($num);

if($bool){
    echo("the number is perfect\n");
}else{
    echo("the number is not perfect\n");
}

//segunda parte

function numerosperfeitos($n){
    for($i=1; $i<=$n; $i++){
        if(nperfeito($i)){
            $vet[] = $i;
        }
    }
    return $vet;
}

$num = (int)readline("enter a number: ");
$vet [] = numerosperfeitos($num);
$tam = count($vet);
foreach ($vet as $i){
    echo($i . "\n");
}
