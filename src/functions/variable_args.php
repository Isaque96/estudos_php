<div class="title">Argumentos Variáveis</div>

<?php
function soma($a, $b)
{
    return $a + $b;
}

echo soma(14, 15, 6, 7, 8, 9) . '<br>';

function somaCompleta(...$numbers)
{
    $soma = 0;
    foreach ($numbers as $number) {
        $soma += $number;
    }

    return $soma;
}

echo somaCompleta(1, 2, 3, 4, 5) . '<br>';

$arr = [6, 7, 8];
echo somaCompleta(...$arr) . '<br>';

function membros($titular, ...$dependents)
{
    echo "Titular: $titular<br>";

    if ($dependents) {
        foreach ($dependents as $depen) {
            echo "Dependentes: $depen<br>";
        }
    }
}

echo '<br>';
membros('Roberto', 'Junior', 'Ana', 'Joaquim');
?>