<?php
echo"<h1>Exceptions - PHP</h1>";

try{
    //VERIFICA A EXIXTÊNCIA DO NÚMERO
    if(!isset($_GET['numero'])){
        throw new \Exception("O número não foi definido", 1);
    }

    //VERIFICA O TIPO 
    if(!is_numeric($_GET['numero'])){
        throw new \Exception("O valor enviado não é númerico", 2);
    }

    echo "Sucesso!";
}catch(\Exception $e){
    echo "<pre>";
    print_r($e->getMessage());
    echo " | Código de erro: ";
    print_r($e->getCode());
    echo "</pre>";
}