
<?php

class Pessoa
{
    public function falar(): void
    {
        echo "Olá pessoal";
    }
}

$david = new Pessoa();
$joao = new Pessoa();

$david->nome = "David Ferreira";  # Dando uma propriedade 'nome' para a classe

#echo $david->nome;

echo var_dump($david), "\n";
echo var_dump($joao);
