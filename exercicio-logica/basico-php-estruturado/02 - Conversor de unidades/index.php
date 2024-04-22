<?php 
//UNIDADES VÁlIDAS PARA O SISTEMA
$unidades = ['mm' => 1,'cm' => 10,'m' => 1000,'km' => 1000000];
//TEXTO DAS UNIDADES VÁLIDAS
$unidadesValidas = implode(', ',array_keys($unidades));

//INPUT DE DADOS E VALIDAÇÃO
do {
    echo " \n-CONVERSOR DE MEDIDAS-\n";
    $unidadeBase = readline('Digite a unidade base: ('.$unidadesValidas.'):');
    if (!isset($unidades[$unidadeBase])) {
        echo "\nUnidade inválida!\n\n";
    }
} while (!isset($unidades[$unidadeBase]));

do {
    $valorBase = readline('Digite o valor que deseja converter: ');
    if (!is_numeric($valorBase)) {
        echo "\nValor inválido!\n\n";
    }
} while (!is_numeric($valorBase));
//OUTPUT COM O DADO CONVERTIDO

$valorMilimetro = $valorBase * ($unidades[$unidadeBase]);
echo "\nResultados:\n";

foreach ($unidades as $unidade => $divisor) {
    if ($unidade == $unidadeBase) continue; 
    echo " > ".($valorMilimetro / $divisor)." ".$unidade. "\n";    
}