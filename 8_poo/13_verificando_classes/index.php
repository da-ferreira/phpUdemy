
<?php

class Humano
{
    public int $idade;
    public string $nome;
    public string $profissao;

    public function falar()
    {
    }

    public function andar()
    {
    }
}


if (class_exists("Humano")) {
    echo "Classe 'Humano' existe\n";
}

print_r(get_class_methods("Humano"));  # Mostra todos os métodos (em nomes) da classe
print_r(get_class_vars("Humano"));     # Mostra todas as propriedades (em nomes) da classe
