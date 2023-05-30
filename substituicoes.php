<?php

$texto = 'Texto com qualquer coisa poxa e caramba';
echo str_replace(['poxa', 'caramba'], // o que
        ['p', 'c'], //pelo oque
        $texto //onde
    ) . PHP_EOL; //substitui algo por outra coisa. OS parametros são: O que, pelo oque e onde. Me retorna uma outra string com os valores substituidos
//caso eu queira susbstituir mais de uma plavra, o primeiro parametro não vai ser mais uma String e sim um Array
//o segundo parametro tambem pode se tornar um array e a ordem de cada palavra a ser substituida vai ser a ordem de cada palavra substituta (se tiver mais palavras a serem substituidas do que substitutas, o restante vai se torar uma string vazia)

echo strtr($texto, 'poxa','*#*@') . PHP_EOL; //tr de translate. Substitui caractere a caractere , p por *, o por #, etc

echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL; //variação em que trabalhamos com array, falando o que quero substituir pelo oque