<?php

$url = 'http://alura.com.br/';

if (str_starts_with($url, 'https')) { //verifica se a string começa com a palavra do segundo parametro
    echo 'É uma URL segura';
} else {
    echo 'Não é uma URL segura';
}


echo PHP_EOL;

if (str_ends_with($url, '.br')) { //verifica se a string termina com a palavra do segundo parametro
    echo 'É um domínio do Brail';
} else {
    echo 'Não é um domínio do Brail';

}

echo PHP_EOL;
