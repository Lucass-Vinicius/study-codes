<?php
class Pessoa
{
    public $nome = "Teste";
    public $idade;

    public function Falar()
    {
        echo $this->nome." de ".$this->idade." anos, falou!";
    }
}

$colaborador = new Pessoa();
$colaborador->nome = "Lucas Vinicius";
$colaborador->idade = 20;
$colaborador->Falar();