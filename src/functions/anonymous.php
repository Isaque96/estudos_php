<div class="title">Funções Anônimas</div>

<?php
$soma = function ($a, $b) {
    return $a + $b;
};

echo $soma(1, 2) . '<br>';

function executar($a, $b, $op, $func)
{
    $resultado = $func($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, '+', $soma);

$multi = function ($a, $b) {
    return $a * $b;
};

executar(2, 3, '*', $multi);

function divisao($a, $b)
{
    return $a / $b;
}

//executar(2, 3, '/', divisao); // Não funciona mais em versões mais novas
executar(2, 3, '/', 'divisao');
?>