<?php 
class Pessoa {
    public $idade;
}

$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = $pessoa; 
$pessoa3 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade; //Output será '35' pois o objeto pessoa2 apenas faz uma referência a pessoa, não é um novo objeto 