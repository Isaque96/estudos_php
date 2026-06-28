<div class="title">Classe e Objeto</div>

<?php
class Cliente
{
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar()
    {
        return "Nome: {$this->nome} Idade: {$this->idade}";
    }
}

$c1 = new Cliente();
$c1->nome = 'Ana Silva';
$c1->idade = 27;

$c2 = new Cliente();
$c2->nome = 'João Santos';
$c2->idade = 30;

echo $c1->apresentar() . '<br>';
echo $c2->apresentar();
