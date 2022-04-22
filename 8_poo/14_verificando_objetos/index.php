
<?php

class Humano
{
    public function falar()
    {
    }
}

$roberto = new Humano();

if (is_object($roberto)) {
    echo "É um objeto\n";
}

echo get_class($roberto), "\n";  # Humano

if (method_exists($roberto, "falar")) {
    echo "Método 'falar' existe.\n";
}

if (method_exists($roberto, "correr")) {
    echo "Método 'correr' existe.\n";
} else {
    echo "Método 'correr' NÃO existe.\n";
}
