<?php 
require 'classes/Produto.php';
require 'models/Produto.php';

use models\Produto as productModel;
use classes\Produto as productClass;

$produto = new productModel();
$produto->mostrarDetalhes();

$produto2 = new productClass();
$produto2->mostrarDetalhes();