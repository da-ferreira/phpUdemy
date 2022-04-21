
<?php

abstract class Teste
{
    public static function testandoClasse()
    {
        echo "Método de uma classe abstrata\n";
    }

    abstract public function testeAbstract();
}

class NovaClasse extends Teste
{
    public function testeAbstract()
    {
        echo "Método abstrato implementado\n";
    }
}

Teste::testandoClasse();  # Usando um método estático de uma classe abstrata

$t = new NovaClasse();
$t->testeAbstract();
