<div class="title">Métodos Mágicos</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo "<p>{$this->nome} diz: Tchau!</p>";
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    // Para atributos não declarados ou inacessíveis
    public function __get($atributo)
    {
        echo "<p>__get: Acessando atributo {$atributo}</p>";
        return $this->$atributo;
    }

    // Para atributos não declarados ou inacessíveis
    public function __set($atributo, $valor)
    {
        echo "<p>__set: Alterando atributo {$atributo} para {$valor}</p>";
        $this->$atributo = $valor;
    }

    // Para métodos não declarados ou inacessíveis
    public function __call($metodo, $params)
    {
        echo "<p>__call: Tentando executar o método {$metodo} com os parâmetros: " . implode(', ', $params) . "</p>";
    }

    // Para métodos estáticos não declarados ou inacessíveis
    public static function __callStatic($metodo, $params)
    {
        echo "<p>__callStatic: Tentando executar o método estático {$metodo} com os parâmetros: " . implode(', ', $params) . "</p>";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }
}

$pessoa = new Pessoa("Ana", 25);
echo $pessoa . "<br>";
echo $pessoa->nome . "<br>";
$pessoa->idade = 26;
echo $pessoa->idade . "<br>";
echo $pessoa->endereco . "<br>"; // Atributo não declarado
$pessoa->endereco = "Rua A, 123"; // Atributo não declarado
$pessoa->falar("Olá", "Mundo");
Pessoa::andar("Rápido");
$pessoa->apresentar();
$pessoa = null; // Destrói o objeto
