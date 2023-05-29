<?php

$csv = ',.Igor Teles,30,.';

echo trim($csv, '.,') . PHP_EOL; //em ingles quer dizer "aparar", apara as pontas, ele retira os espaços em branco, porem, como segundo paramentro, eu posso indicar o que ele deve retirar, neste caso, o ". e ,"

echo ltrim($csv, '.,') . PHP_EOL; //apara apenas no lando esquerdo (l de left)
echo rtrim($csv, '.,') . PHP_EOL; //apara apenas no lado direito (r de right)