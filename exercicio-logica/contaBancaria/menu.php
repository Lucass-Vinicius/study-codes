<?php 

require __DIR__.'/index.php';

$contaBancaria = new ContaBancaria();
$valorDeposito = 0;
do{
    echo "\n-Caixa eletronico-\n";
    echo "----------------------\n";
    echo "01 - Depositar | 03 - Consultar Saldo | 03 - Sacar |04 - Sair\n";
    $opcao = readline('Digite a opção deseja: ');
    switch($opcao){
        case 1:
            $valorDeposito = readline('Qual valor dejeja depositar: ');
            $contaBancaria->Depositar($valorDeposito);
            echo "Deposito no valor de R$ ".$valorDeposito." realizado com sucesso!\n";
            break;
    }
}while($opcao != 4);