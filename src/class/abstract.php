<div class="title">Abstrata</div>

<?php
abstract class Abstrata
{
    abstract public function meotodo1();
    abstract protected function meotodo2($param);
}

abstract class FilhaAbstrata extends Abstrata
{
    public function meotodo1()
    {
        echo "Executando o método 1<br>";
    }
}

class Concreta extends FilhaAbstrata
{
    public function meotodo1()
    {
        echo "Executando o método 1 na classe concreta<br>";
        parent::meotodo1();
    }

    // É possível aumentar a visibilidade do método
    // ou seja, de protected para public, mas não o contrário
    protected function meotodo2($param)
    {
        echo "Executando o método 2 com o parâmetro: $param<br>";
    }

    public function metodo3()
    {
        echo "Executando o método 3<br>";
        $this->meotodo2("Teste");
    }
}

$c = new Concreta();
$c->meotodo1();
// $c->meotodo2("Teste"); // Erro: método protegido
$c->metodo3();

echo "<br>";
var_dump($c);

echo "<br>";
var_dump($c instanceof Concreta);
echo "<br>";
var_dump($c instanceof FilhaAbstrata);
echo "<br>";
var_dump($c instanceof Abstrata);
?>