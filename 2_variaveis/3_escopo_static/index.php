
<?php

function testeStatic()
{
    static $a = 0;  # O escopo de 'a' é mantido entre chamandas de função
    $a++;

    echo $a, "\n";
}

testeStatic();  # 1
testeStatic();  # 2
testeStatic();  # 3
testeStatic();  # 4
