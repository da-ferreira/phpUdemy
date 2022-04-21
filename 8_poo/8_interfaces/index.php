
<?php

# phpcs:ignoreFile

interface Caracteristicas
{
    public const NOME = "David";
    public function falar();
}


class Humano implements Caracteristicas
{
    public $idade = 29;

    public function falar()
    {
        echo "Olá\n";
    }

    public function nome()
    {
        echo self::NOME;
    }
}


$matheus = new Humano();
$matheus->falar();
$matheus->nome();
