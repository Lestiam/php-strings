<?php

function geralEmail(): void
{
    $conteudoEmail =
    'Olá, Fulano(a)!
    
    Estamos entrando em contato para
    {motivo do contato}
    
    {assinatura}';

    echo $conteudoEmail . PHP_EOL;
}

geralEmail();

//repare que o texto é impresso com a identação. Agora, se adicionarmos 3 <<< e qualquer palavra e dissermos que a String é igual a essa palavra, ele retira a identação.
//<<<FIM aceita variaveis, é chamada de heredoc e funciona como aspas duplas; <<<'FIM' vai considerar como se fossem aspas simples, aí ele vai imprimir $nome (não vai identificar que é uma variável), é chamado de nowdoc

function geralEmail2(string $nome): void
{
    $conteudoEmail2 = <<<FIM
    Olá, $nome!
    
    Estamos entrando em contato para
    {motivo do contato}
    
                        {assinatura};

    
    FIM; //chamo aqui para tirar os espaços que vem antes, o numero de espaços que estiver antes do FIM o PHP via contar e cortar, se alguma linha tiver a mais que os espaços do "FIM", ele vai deixar
    echo $conteudoEmail2;

}

geralEmail2('Igor Teles');