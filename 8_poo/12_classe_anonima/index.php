
<?php

$pessoa = new class ()
{
    public string $nome = "Matheus";

    public function nome()
    {
        echo "Olá, meu nome é {$this->nome}\n";
    }
};

$pessoa->nome();
