<div class="title">Desafio Data</div>

<?php
class Data
{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function __construct($dia = 1, $mes = 1, $ano = 1970)
    {
        $this->dia = $dia;
        $this->mes = $mes;
        $this->ano = $ano;
    }

    public function apresentar()
    {
        return sprintf("%02d/%02d/%04d", $this->dia, $this->mes, $this->ano);
    }
}

$d1 = new Data();
echo $d1->apresentar();
echo "<br>";

$d2 = new Data(31, 12, 2024);
$d2->dia = 20;
echo $d2->apresentar();
