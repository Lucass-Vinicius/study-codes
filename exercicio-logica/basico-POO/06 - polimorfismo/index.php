<?php 

/* Polimorfismo basicamente consiste no conceito de você poder reempletmentar métodos da classe pai de diferentes formas nas classes filhas. Pode reescreve o método e definir o comportamento que deseja.  */

class Animal {
    public function Andar(){
        echo "O animal andou!";
    }
}

class Cavalo extends Animal {
    public function Andar(){
        echo"\nO cavalo andou!";
    }
}

class Mula extends Animal {
    public function Andar(){
        echo "\nA mula andou!";
    }
}

$animal = new Animal();
$animal->Andar();
$cavalo = new Cavalo();
$cavalo->Andar();
$mula = new Mula();
$mula->Andar();
