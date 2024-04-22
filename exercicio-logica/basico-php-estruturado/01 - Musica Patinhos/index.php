<?php 
//INPUT DE QUANTIDADE DE PATINHOS
$patinhos = readline ('Digite a quantidade de patinhos: ');
//VALIDAÇÃO DA QUANTIDADE
if (!is_numeric($patinhos) || $patinhos <= 1 || $patinhos >= 10) {
    echo"Número de patinhos digitado é invalido. É necessário enviar um valor maior que 1 e menor que 10. \n";
    exit;
}
//ITERa A QUANTIDADE TOTAL DE PATINHOS
for ($i = $patinhos; $i > 0; $i--) {
    echo "\n";
    //CONDIÇÃO DA QUANTIDADE DE PATINHOS
    echo $i != 1 ? $i. " patinhos foram passear \n" : "1 patinho foi passear \n";
    //TEXTOS FIXOS
    echo "Além das montanhas \nPara brincar \nA mamãe gritou: Quá, quá, quá, quá \n";
    //CONDIÇÃO PARA A QUANITDADE RESTANTE DE PATINHO
    switch ($i) {
        case 2:
            echo "Mas só 1 patinho voltou de lá. \n";
            break;
        case 1:
            echo "Mas nenhum patinho voltou de lá. \n";
            break;
        default:
            echo "Mas só ". ($i -1) ." patinhos voltaram de lá. \n";
            break;
    }
}
//ULTIMA ESTROFE
echo "\n";
echo "A mãe patinha foi procurar\nAlém das montanhas\nNa beira do mar\nA mamãe gritou: Quá, quá, quá, quá\nE os ".$patinhos." patinhos voltaram de lá.\n";