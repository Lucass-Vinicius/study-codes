<?php 
class Login
{
    private $email; 
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($n)
    {
        $this->nome = $n;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($e)
    {
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($s)
    {
        $this->senha = $s;
    }
    public function Logar() 
    {
        if ($this->email == "teste@teste.com" && $this->senha == "123456") {
            echo "Logado com sucesso!";
        } else {
            echo "Dados inválidos";
        }
            
    }
}

$logar = new Login("teste@teste.com","123456","Lucas V");
$logar->Logar();
echo "\n".$logar->getNome();