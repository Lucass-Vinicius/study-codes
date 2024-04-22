<?php
$cedulas = [
    5,
    10,
    20,
    50,
    100
];
//INFORMA AS CÉDULAS DISPONÍVEIS PARA SAQUE
echo "Cédulas disponíveis ".implode(', ',$cedulas)."\n"; 

//SOLICITA O VALOR DO SAQUE
$valorSaque = readline ('Digita o valor para o saque: ');

//VERIFICA SE O SAQUE É VALIDO DE ACORCO COM AS CÉDULAS DISPONÍVEIS
if ($valorSaque % $cedulas[0] > 0) {
    die('O valor solicitado não pode ser atendido pelas cédulas disponíveis');
}
//AUXILIAR DO CÁLCULO DO VALOR RESTASNTE
$valorRestante = $valorSaque;
//CÉDULAS PARA O SAQUE
$cedulasSaque = [];
//PRIORIZA AS CÉDUAS MAIORES
rsort ($cedulas);
//ITERA AS CÉDULAS DISPONÍVEIS
foreach ($cedulas as $cedula) {
    //VERIFICA O VALOR DA CÉDUlA
    if ($cedula > $valorRestante) continue;
    $quantidade = floor ($valorRestante / $cedula);
    //CALCULA O VALOR RESTANTE APÓS UTILIZAR A CÉDULA ATUAL
    $valorRestante  -= ($cedula * $quantidade);
    //CÉDULAS PARA O SAQUE
    $cedulasSaque[$cedula] = $quantidade;
}

echo "\nSaque de R$ ".$valorSaque."\n";

foreach ($cedulasSaque as $cedula => $quantidade) {
    echo " > ".$quantidade."x R$ ".$cedula."\n";
}