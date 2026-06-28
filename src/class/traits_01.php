<div class="title">Trait 01</div>

<?php
trait Validacao
{
    public $a = 'Valor A';

    public function validarString($str)
    {
        return isset($str) && $str !== '';
    }
}

trait ValidacaoMelhorada
{
    public $b = 'Valor B';
    private $c = 'Valor C';

    public function validarStringMelhorada($str)
    {
        return isset($str) && trim($str) !== '';
    }
}

class Usuario1
{
    use Validacao;
    use ValidacaoMelhorada;

    public function imprimirC()
    {
        // Atributos privados da trait só funcionam dentro da classe que a utiliza
        echo $this->c;
    }
}

// Não funcionam
//var_dump(Validacao->validarString(null));
//var_dump(Validacao::validarString(''));

$usuario = new Usuario1();
var_dump($usuario->validarString('  '));
echo '<br>';
var_dump($usuario->validarStringMelhorada('  '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
echo '<br>';
$usuario->imprimirC();
