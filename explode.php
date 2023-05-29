<?php

$array = '1 2 3 4';

var_dump(explode(' ', $array, 2)); //o terceiro parametro serve como limitador, ou seja, vai dividir isto em 2 strings: 1 array que vai até o primeiro espaço e um segundo array que tem todos os demais caracteres

