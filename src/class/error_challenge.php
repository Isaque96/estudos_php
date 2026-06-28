<div class="title">Desfio Erros</div>

<?php
interface Template
{
    public function method1();
    public function method2($param);
}

abstract class AbstractClass implements Template
{
    public function method3()
    {
        echo "Estou funcionando!";
    }

    public function method1()
    {
        echo "Estou funcionando!";
    }
}

class Classe extends AbstractClass
{
    public function __construct($param)
    {

    }

    public function method2($param)
    {
        echo "Estou funcionando!";
    }
}

$exemplo = new Classe('...');
$exemplo->method3();
?>