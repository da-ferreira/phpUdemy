
<?php

$numero = 13;
$nome = "David Ferreira";
$pi = 3.14159;

printf("numero: %d | nome: %s | pi (com 3 casa decimais): %.3f\n", $numero, $nome, $pi);

# sprintf retorna a string formatada

echo sprintf("numero: %d | nome: %s | pi (com 3 casa decimais): %.3f\n", $numero, $nome, $pi);
sprintf("numero: %d\n", $numero);  # Não é feito esse print na tela

# vprintf é igual ao printf, só que aceita uma matriz de argumentos

$arr = [13, "David Ferreira", 3.14159];
vprintf("numero: %d | nome: %s | pi (com 3 casa decimais): %.3f\n", $arr);
#printf("numero: %d | nome: %s | pi (com 3 casa decimais): %.3f\n", $arr);  # Erro
