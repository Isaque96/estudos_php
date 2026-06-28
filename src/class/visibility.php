<div class="title">Visibilidade</div>

<?php
class A
{
    public $pub = 'public';
    protected $prot = 'protected';
    private $priv = 'private';

    public function showA()
    {
        echo "Class A: " . $this->pub . '<br>';
        echo "Class A: " . $this->prot . '<br>';
        echo "Class A: " . $this->priv . '<br>';
    }

    protected function byInheritance()
    {
        echo "Protected method by inheritance<br>";
    }

    private function dontShow()
    {
        echo "Não vou mostrar!<br>";
    }
}

$a = new A();
$a->showA();

class B extends A
{
    public function showB()
    {
        echo "Class B: " . $this->pub . '<br>';
        echo "Class B: " . $this->prot . '<br>';
        // echo $this->priv . '<br>'; // Erro
        // $this->dontShow(); // Erro

        parent::byInheritance();
    }
}

$b = new B();
$b->showB();
//$b->byInheritance();
