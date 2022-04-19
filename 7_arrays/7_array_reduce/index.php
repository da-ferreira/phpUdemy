
<?php

function soma($a, $b)
{
    return $a + $b;
}

function multiplicacao($a, $b)
{
    return $a * $b;
}

$arr = [1, 4, 5, 7, 8, 9];
$soma = array_reduce($arr, "soma");
$multiplicacao = array_reduce($arr, "multiplicacao");

echo $soma, "\n";  # 34
echo $multiplicacao, "\n";
