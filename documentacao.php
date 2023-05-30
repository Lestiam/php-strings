<?php

$trans = ["hello" => "hi", "hi" => "hello"]; //troca hello por hi e hi por hello, mas não substitui onde ele já havia feito a substituição antes
echo strtr("hi all, I said hello", $trans) . PHP_EOL;

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hi all, I said hello");//troca hello por hi e hi por hello, mas substitui onde ele já havia feito a substituição antes
