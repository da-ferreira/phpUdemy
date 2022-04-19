
<?php

# extract: cria variáveis a partir de uma array associativo

$cor = "cinza";

$var_array = [
    "cor" => "azul",
    "tamanho" => "médio",
    "forma" => "esfera"
];

/*
 * 1ª arguemento: É o array com as variáveis.
 *
 * 2ª arguemento: Estou informando que, se tiver uma colisão (variavel com mesmo nome)
 * adiciona um prefixo antes do nome da variável e não sobrescreve a outra. Há varios valores
 * para lidar com nomes inválidos/chaves numéricas e colisões
 *
 * 3ª arguemento: O prefixo a ser adicionado
 */
extract($var_array, EXTR_PREFIX_SAME, "x");
echo "$cor, $x_cor, $tamanho, $forma \n";

# compact: cria uma array associativo a partir de variáveis

$marca = "BMW";
$motor = "3.0";
$tetoSolar = true;
$portas = 4;

$carro = compact("marca", "motor", "tetoSolar", "portas");
print_r($carro);
