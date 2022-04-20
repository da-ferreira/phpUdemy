
<?php

class Humano
{
    public $idade = 29;

    public function falar()
    {
        echo "Olá!\n";
    }

    protected function andar()
    {
        echo "Andou\n";
    }

    private function correr()
    {
        echo "Correu\n";
    }
}


class Programador extends Humano
{
    public function acessaAndar()
    {
        $this->andar();
    }
}

$jose = new Programador();

$jose->falar();        # Tem acesso
$jose->acessaAndar();  # Só quem acessa é a classe
# $jose->correr();     # Não tem acesso, nem a classe
