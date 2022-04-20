
<?php

class Cachorro
{
    public $nome;

    public function escolherNome($nome)
    {
        $this->nome = $nome;
    }

    public function latir()
    {
        return "Au au";
    }

    public function lartirMaisForte()
    {
        return strtoupper($this->latir());
    }
}


$frida = new Cachorro();
$frida->escolherNome("Frida");
echo $frida->latir(), "\n";
echo $frida->lartirMaisForte(), "\n";
