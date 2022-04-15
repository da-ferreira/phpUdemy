
<?php

$a = 10;  # Escopo global
$b = 8;

function escopo()
{
    $a = 5;         # Escopo local
    global $b;      # Usando a variável b de escopo global
    static $c = 0;  # Escopo estático, seu valor se mantém a cada chamada de função
    $c++;

    printf("FUNCÃO = a: %d | b: %d | c: %d\n", $a, $b, $c);
}

escopo();
escopo();
escopo();
printf("FORA = a: %d | b: %d\n", $a, $b);
