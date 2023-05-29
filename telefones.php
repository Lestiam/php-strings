<?php

$telefones = ['(31) 99999 - 9999', '(11) 99999 - 9999', '(21) 99999 - 9999a'];

echo implode(PHP_EOL, $telefones); //serve para unir o array a uma string, o primeiro parametro é o que ele irá usar para unir, neste caso, eu terei cada telefone em uma linha
echo  PHP_EOL;
echo strtoupper(implode(', ', $telefones)); //neste caso eles serão unidos em uma string separando eles por virgula