<div class="title">Construtor e Destrutor</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade = 18)
    {
        $this->nome = $nome;
        $this->idade = $idade;

        echo "<p>Objeto criado! ($this->nome)</p>";
    }

    public function __destruct()
    {
        echo "<p>Objeto destruído! ($this->nome)</p>";
    }

    public function apresentar()
    {
        echo "<p>Olá! Meu nome é $this->nome e tenho $this->idade anos.</p>";
    }
}

$pessoa1 = new Pessoa("Isaque", 19);
$pessoa2 = new Pessoa("Maria", 25);

$pessoa1->apresentar();
$pessoa2->apresentar();

unset($pessoa1);
$pessoa2 = null;
