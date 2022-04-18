
<?php

$str = "Lorem ipsum dolor sit, amet consectetur adipisicing elit.";
$nome = "     David   ";

printf("Tamanho de str: %d\n", strlen($str));
printf("Removendo espaços em branco do início da string: %s.\n", ltrim($nome));
printf("Removendo espaços em branco do final da string: %s.\n", rtrim($nome));
printf("Removendo espaços em branco do início e final da string: %s.\n", trim($nome));
printf("strtolower: %s\n", strtolower($str));
printf("strtoupper: %s\n", strtoupper($str));
printf("Primeira letra da string em maiúscula: %s\n", ucfirst($str));
printf("Primeira letra das palavras da string em maiúscula: %s\n", ucwords($str));

$textoComTags = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

printf("Remove tags HTML: %s\n", strip_tags($textoComTags));

$strArray = explode(" ", $str);  # Split
print_r($strArray);

$arrayStr = implode(" ", $strArray);
printf("Juntando o array em uma string: %s\n", $arrayStr);

# (Primeira ocorrencia) Retorna o primeiro caracter de inicio da palavra. Se não encontrar retorna false
$encontrarPalavra = strpos($str, "i");
printf("%s\n", $encontrarPalavra);

# (Última ocorrencia) Retorna o primeiro caracter de inicio da palavra. Se não encontrar retorna false
$encontrarPalavra = strrpos($str, "i");
printf("%s\n", $encontrarPalavra);

# Retornando o resto da string

$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain, "\n";  # prints @example.com

$user = strstr($email, '@', true);  # A partir do PHP 5.3.0
echo $user, "\n";  # prints name
