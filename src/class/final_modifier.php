<div class="title">Final</div>

<?php
abstract class Abstrata1
{
    abstract public function metodo1();

    final public function metodo2()
    {
        echo "Não posso ser sobrescrito!";
    }
}

class Classe1 extends Abstrata1
{
    public function metodo1()
    {
        echo "Executando método 1<br>";
    }

    //public function metodo2()
    //{
    //    echo "Tentando sobrescrever o método 2<br>";
    //}
}

$classe = new Classe1();
$classe->metodo1();
$classe->metodo2();

final class Unica
{
    public $attr = 'Valor';
}

// Classe não pode ser extendida
// class Tentativa extends Unica {} - Não funciona

$unica = new Unica();
echo "<br>{$unica->attr}";
?>