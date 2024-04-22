<?php 
require __DIR__.'/tiposDeVeiculo/Carro.php';
require __DIR__.'/tiposDeVeiculo/Moto.php';

$carro = new Carro();
$carro->modelo = "Gol quadrado";
$carro->cor = "Prata";
$carro->ano = 2008;
$carro->Andar();
$carro->Parar();
$carro->ligarLimpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "NH 190";
$moto->cor = "Azul";
$moto->ano = 2024;
$moto->Andar();
$moto->Parar();
$moto->darGrau();
var_dump($moto);