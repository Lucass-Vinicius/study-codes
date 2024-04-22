<?php 
class ContaBancaria {
    private $numeroConta;
    private $nomeTitular;
    private $saldo = 0;

    public function Depositar($d){
        $this->saldo += $d;
        echo var_dump($d);
        return $d;
    }
    public function Sacar($s){
        $this->saldo -= $s;
    }
}