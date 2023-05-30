<?php
//a biblioteca de regex do PHP é a PCRE2
$telefones = ['(31) 99999 - 9999 ', '(11) 99999 - 9999dsa', '(21) 99999 - 9999'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    $telefoneValido = preg_match( //o primeiro parametro é a expressão regular e o segundo parâmetro é o que queremos avaliar com essa expressão (posso fazer a expressão no site regex101.com, ela precisa começar com /\ e terminar com /)
        $regex,
        $telefone,
        $correspondencia); //o terceiro parametro ele me retorna o DDD no array, pq pus "()" na primeira parte do meu regex

    var_dump($correspondencia);
    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }

    echo preg_replace(
            $regex,
            '(XX) \2', //vai substituir o primeiro grupo de captura, deixando o segundo grupo de captura imutável "\2"
            $telefone
        ) . PHP_EOL; //o que eu quero substituir, pelo que eu quero substituir e onde eu quero substituir
}

//Considere que temos uma variável $data com o valor "2022-06-08".
//
//Como podemos usar uma regex para transformar essa data em "08/06/2022"?
//$dataTransformada = preg_replace('/^([0-9]{4})-([0-9]{2})-([0-9]{2})/', '\3/\2/\1', $data);
//
//Além de usar a sintaxe \n para utilizar o grupo de captura de número n, nós também podemos usar $n. Sendo assim,
// o terceiro parâmetro também poderia ser $3/$2/$1. As 2 sintaxes funcionam da mesma forma.