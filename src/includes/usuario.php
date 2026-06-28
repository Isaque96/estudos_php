<?php

require_once 'pessoa.php';

class Usuario extends Pessoa
{
    public $email;

    public function __construct($nome, $idade, $email)
    {
        parent::__construct($nome, $idade);
        $this->email = $email;
    }

    public function apresentar()
    {
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos e meu email é {$this->email}.";
    }
}
