<?php 
abstract class Banco 
{
    protected  $saldo;
    protected $limiteSaque;
    protected $juros; 

    abstract function Sacar($s);
    abstract function Depositar($d);

    public function setSaldo($s)
    {
        $this->saldo = $s;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
}

class Inter extends Banco 
{
    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo "\n Sacou: ".$s;
    }
    public function Depositar($d)
    {
        $this->saldo += $d;
        echo "\n Depositou: ".$d;
    }
}

$inter = new Inter();
$inter->setSaldo(1000);
echo "\nSaldo: ".$inter->getSaldo();
$inter->Sacar(250);
echo "\nSaldo: ".$inter->getSaldo();
$inter->Depositar(900);
echo "\nSaldo: ".$inter->getSaldo();
