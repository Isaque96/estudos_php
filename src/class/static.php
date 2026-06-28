<div class="title">Estático</div>

<?php
class A
{
    public $nonStatic = 'Variável de Instância';
    public static $static = 'Variável Estática';

    public function show()
    {
        echo "Não estático = {$this->nonStatic}<br>";
        /**
         * Não funcionam
         * echo "Estático = {$this->static}<br>";
         * echo 'Estático = ' . $this->static . '<br>';
         * echo "Estático = {self::$static}<br>";
         */
        echo "Estático = " . self::$static . '<br>';
    }

    public static function staticShow()
    {
        // echo "Estático = {$static}<br>"; // Não funciona
        // echo "Não estático = {$this->nonStatic}<br>"; // Não funciona
        echo "Estático = " . self::$static . '<br>';
    }
}

$a = new A();
$a->show();
//$a->staticShow(); Não é a forma ideal
echo A::$static . '<br>';
A::staticShow();
