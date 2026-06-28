<div class="title">Traits 02</div>

<?php
trait Validacao1
{
    public $a = 'Valor A';

    public function validarString($str)
    {
        return isset($str) && $str !== '';
    }
}

trait ValidacaoMelhorada1
{
    public $b = 'Valor B';
    private $c = 'Valor C';

    public function validarString($str)
    {
        return isset($str) && trim($str) !== '';
    }
}

class Usuario2
{
    use Validacao1, ValidacaoMelhorada1 {
        ValidacaoMelhorada1::validarString insteadof Validacao1;
        Validacao1::validarString as validarStringSimples;
    }
}

$usuario2 = new Usuario2();
var_dump($usuario2->validarString(''));
echo '<br>';
var_dump($usuario2->validarStringSimples(' '));
