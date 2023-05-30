<?php

$anoNascimento = '     1993     ';
$idade = 2023 - $anoNascimento; //o PHP entende que apesar de anoNascimento ser uma string, ele contem apenas numeros, então ele consegue fazer este calculo.
//é o conceito de Strings numericas, é uma string que só contenha numeros, ou espaços (antes ou depois) e numeros

echo $idade . PHP_EOL;

if ($anoNascimento == 1993) { //ele vai identificar que é uma String numerica e vai cair no SIM
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}

if ($anoNascimento === 1993) { //ele vai comparar se os valores são iguais e se OS TIPOS são iguais, entao, vai cair no não, pois compara string com int, compara se são IDENTICOS
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}

$teste = '123';
var_dump((int) $teste); //conversão explicita

function exibeNumero(int|float $numero): void //conversão implicita
{
    var_dump($numero);
}

exibeNumero($teste);

var_dump((int) 'qualquer coisa'); //quando o PHP converte qualquer string não numérica para inteiro, ele retorna 0

var_dump(0 == 'qualquer coisa'); //porem do PHP 8 em diante, ele tenta transformar o numero em String, então isso vai dar false
var_dump(0 == '0'); //porem do PHP 8 em diante, ele tenta transformar o numero em String, então isso vai dar true