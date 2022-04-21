
<?php

# phpcs:ignoreFile

trait Objeto
{
    public function teste()
    {
        echo "Testando trait de objeto\n";
    }
}

trait Testando
{
    public $propriedade = 10;

    public function traitTeste()
    {
        echo "Este método é da trait 'Testando'\n";
    }
}


class Central
{
    # Tenho acesso, na classe Central, aos métodos da classe "Objeto" e "Testando"
    use Objeto;
    use Testando;
}


$x = new Central();
$x->teste();
$x->traitTeste();
echo $x->propriedade, "\n";
