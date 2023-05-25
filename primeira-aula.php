<?php

$nome = 'Igor Santos';

$ehDaMinhaFamilia = str_contains($nome, 'Teles'); //verificar se uma String esta dentro de outra String (contem outra String), retorna um boolean

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}
