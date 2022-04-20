
<?php

class Pessoa
{
    function falar()
    {
        echo "Olá\n";
    }

    function somar($x, $y)
    {
        echo $x + $y, "\n";
    }
}


$matheus = new Pessoa();
$matheus->falar();
$matheus->somar(10, 15);

echo get_class($matheus);  # Nome da classe de um objeto
