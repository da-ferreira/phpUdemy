
<?php

$pessoa = ["João da Silva", 29, "Desenvolvedor", "SP"];
list($nome, $idade, $profissao, $estado) = $pessoa;

printf("%s | %d | %s | %s\n", $nome, $idade, $profissao, $estado);
