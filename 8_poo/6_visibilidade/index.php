
<?php

class Car
{
    public $rodas = 4;                # Todos podem acessar
    protected $portas = 4;            # Só a classe e quem herda pode acessar
    private $vidro = "Sem película";  # Só a classe acessa

    public function getVidro()
    {
        return $this->vidro;
    }

    public function setVidro($vidro)
    {
        $this->vidro = $vidro;
    }

    public function getPortas()
    {
        return $this->portas;
    }

    public function setPortas($portas)
    {
        $this->portas = $portas;
    }
}

class Mecanico
{
    public function alterarRodas(Car $carro, int $quantidade)
    {
        $carro->rodas = $quantidade;
    }

    public function colocarPelicula(Car $carro, string $pelicula)
    {
        # Não posso acessar atributo 'vidro' porque é privado
        # $carro->vidro = $pelicula;

        $carro->setVidro($pelicula);  # Jeito certo de fazer
    }
}


$carro = new Car();
echo $carro->rodas, "\n";

$david = new Mecanico();
$david->alterarRodas($carro, 17);
$david->colocarPelicula($carro, "G20");

echo "{$carro->rodas}, {$carro->getVidro()}\n";  # 17, G20

# Gerra erro, 'portas' é protegido (protected)
# $carro->portas = 4
