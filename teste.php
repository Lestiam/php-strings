<?php

$array = array( //transforma array em json
    'cpf' => 'João',
    'barcode' => '123465',
    'proxy' => 123456,
    'saldo_real' => 5050,
    'atualizar' => 1
);

// Converte o array para JSON
$json = json_encode($array);

// Exibe o JSON
echo $json;