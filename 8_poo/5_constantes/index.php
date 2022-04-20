
<?php

class Humano
{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    function mostrarConstantes()
    {
        echo self::BRACOS;
    }
}

$matheus = new Humano();
echo $matheus::BRACOS, "\n";
$matheus->mostrarConstantes();
