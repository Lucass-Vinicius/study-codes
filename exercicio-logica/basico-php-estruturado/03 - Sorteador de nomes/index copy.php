<?php 

$opcao = 0;
$nomes = [];

//Menu do programa 

while($opcao != 4){
    echo "\n-Sorteador de Nomes-\n";
    echo "--------------------\n";
    echo "Menu: \n 01 - Adicionar nomes";
    if(count($nomes) >= 1 ) echo "\n 02 - Listar nomes ";
    if(count($nomes) > 1 ) echo"\n 03 - Sortear ";
    echo"\n 04 - Sair\n";
    echo "--------------------\n";
    $opcao = readline('Qual a opção desejada? ');
    switch($opcao){
        case 1:
            $nomes[] = readline("Digite um novo nome: \n");
            break;
        case 2:
            if(count($nomes) >= 1 ){
                echo "\nNomes adcionados: \n";
                foreach($nomes as $nome){
                echo " > ".$nome."\n";
                }
            }  
            break;
        case 3:
            if(count($nomes) > 1 ){
                echo"sorteado";
            }  
            break;
        case 4:
            echo "Saindo...";
            break;
        default:
            echo "\nOpção invalida!\n";
    }
}