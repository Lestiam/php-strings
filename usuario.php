<?php
//existe uma extensão em PHP que consegue lidar com multi-bytes, ou seja, consegue reconhecer acentos, para utiliza-lo, basta colocar "mb_" antes de uma função de string.
$email = 'ígor@alura.com.br'; //um pedaço de uma string é chamado de substring
$email2 = 'LESTIAN@alura.com.br'; //um pedaço de uma string é chamado de substring

$senha = 'áéíóú';

mb_strlen($senha); //conta o número de bytes que o caractere ocupa: char simples: a,b,c = 1 byte para cada; char complexo á,í,ã = 2 bytes para cada (1 para a letra e outro para o acento), já o mb_strlen consegue contar 1 bit para cada letra, sendo com ascento ou não
if (mb_strlen($senha) < 8) {
    echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); //buscar a posição do @ dentro da string
$posicaoDoArroba2 = strpos($email2, '@'); //buscar a posição do @ dentro da string


$usuario = substr($email, 0, $posicaoDoArroba); //pega uma palavra específica dentro da String, os parametros são a posição inicial e o tamanho (até onde eu quero pegar)
$usuario2 = substr($email2, 0, $posicaoDoArroba2); //pega uma palavra específica dentro da String, os parametros são a posição inicial e o tamanho (até onde eu quero pegar)

echo mb_strtoupper($usuario) . PHP_EOL; //transforma em letra maiuscula, na verdade ela retorna uma outra string só que em maiusculo
echo strtolower($usuario2) . PHP_EOL; //transforma em letra minuscula, na verdade ela retorna uma outra string só que em minuscula

echo substr($email, $posicaoDoArroba + 1) . PHP_EOL; //se eu não informar o número de caracteres, ele pega do inicio até o final
