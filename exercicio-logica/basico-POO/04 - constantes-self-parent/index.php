<?php 
class Pessoa
{
    const nome = "Lucas";

    public function exibirNome() 
    {
        echo self::nome;
    }
}

class Lucas extends Pessoa
{
    const nome = "Pereira";
    public function exibirNome()
    {
        echo self::nome;
        // echo parent::nome;  - parent simboliza que esta se referenciando a contante da classe pai. 
    }
}
$lucas = new Lucas();
$lucas->exibirNome();