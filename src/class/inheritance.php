<div class="title">Herança</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        echo "<p>{$this->nome} diz: Olá!</p><br>";
    }

    public function __destruct()
    {
        echo "<p>{$this->nome} diz: Tchau!</p><br>";
    }

    public function apresentar()
    {
        $message = "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
        echo "<p>$message</p><br>";
        return $message;
    }
}

class Usuario extends Pessoa
{
    public $login;

    public function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
        echo "<p>Usuário {$this->login} criado!</p><br>";
    }

    public function __destruct()
    {
        echo "<p>Removendo usuário {$this->login}...</p><br>";
        parent::__destruct();
    }

    public function apresentar()
    {
        $message = parent::apresentar() . " Meu login é {$this->login}.";
        echo "<p>$message</p><br>";
        return $message;
    }
}

$usuario = new Usuario("Isaque", 19, "isaque_schuwarte");
$usuario->apresentar();
