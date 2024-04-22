<?php
echo"<h1>Cadencia - PHP</h1>";

function validarValor($numero){
    if($numero > 10){
        throw new \Exception("O número deve ser menor do que 10", 3);
    }
}

try{
    //VERIFICA A EXIXTÊNCIA DO NÚMERO
    if(!isset($_GET['numero'])){
        throw new \Exception("O número não foi definido", 1);
    }

    //VERIFICA O TIPO 
    if(!is_numeric($_GET['numero'])){
        throw new \Exception("O valor enviado não é númerico", 2);
    }

    //VERIFICA O VALOR ENVIADO DO NÚMERO
    validarValor($_GET['numero']);

    echo "Sucesso!";
}catch(\Exception $e){
    echo "<pre>";
    print_r($e->getMessage());
    echo " | Código de erro: ";
    print_r($e->getCode());
    echo "</pre>";
}
