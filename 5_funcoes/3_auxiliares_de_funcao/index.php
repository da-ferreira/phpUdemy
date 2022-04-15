
<?php

function soma(int $a, int $b)
{
    print_r(func_get_args());  # Retorna uma array com os argumentos passados para essa função
    printf(func_num_args());   # Retorna o número de argumentos dessa função
    return $a + $b;
}

soma(2, -40);
