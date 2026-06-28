<div class="title">Polimorfismo</div>

<?php
abstract class Comida
{
    public $peso;
}

class Arroz extends Comida
{
}

class ArrozIntegral extends Arroz
{
}

class Feijao extends Comida
{
}

class Sorvete extends Comida
{
}

class Pessoa2
{
    public $peso;

    public function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer(Comida $comida)
    {
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.3;
$c2 = new ArrozIntegral();
$c2->peso = 0.3;
$c3 = new Sorvete();
$c3->peso = 1.5;

$pessoa = new Pessoa2(80);

$pessoa->comer($c1);
echo $pessoa->peso . "<br>";

$pessoa->comer($c2);
echo $pessoa->peso . "<br>";

$pessoa->comer($c3);
echo $pessoa->peso . "<br>";
