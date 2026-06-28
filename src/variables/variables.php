<div class="title">Variáveis</div>

<?php
$numA = 13;
echo $numA;
var_dump($numA);

echo '<br>';
$a = 3;
$b = 16;
$sum = $a + $b;

echo $sum;
echo '<br>';
echo isset($sum);

unset($sum);
echo '<br>';
var_dump(isset($sum));

// var_dump($sum); NULL # gera warning
$variable = 10;
echo '<br>' . $variable;

$variable = "Agora sou uma string!";
echo '<br>' . $variable;

// Nomes de variável
$valid = 'valida';
$valid2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar SEMPRE
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
?>