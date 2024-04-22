<?php 

/*Podemos criar atributos e métodos estáticos, fazendo isso eu não preciso mais estânciar um objeto dessa classe, para utilização deste método estático, porém caso tenha métodos não estáticos nessa classe, para utilização deles será necessário instânciar uma classe. 
Para Utilização de atributos estáticos dentro do escopo da própria classe, devemos utilizar o 'self::' ao invés do '$this->'
*/

class Login2
{
    public static $user;
    public static function verificaLogin()
    {
        echo "O usuário ".self::$user." está logado!";
    }

    public function sairSistema()
    {
        echo"\nO usuário deslogou";
    }
}

Login2::$user = "admin";
Login2::verificaLogin();

$login = new Login2();
$login->sairSistema();