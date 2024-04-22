<?php 
require __DIR__.'../Veiculo/Veiculo.php';

class Carro extends Veiculo {

    public function ligarLimpador(){
        echo"Limpando parabrisa!\n\n";
    }
}