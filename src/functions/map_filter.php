<div class="title">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];
$notasFinais = [];

foreach ($notas as $nota) {
    $notasFinais[] = round($nota);
}

print_r($notasFinais);

echo '<br>';
$notasFinais2 = array_map('round', $notas);

print_r($notasFinais2);

$aprovados = [];

foreach ($notas as $nota) {
    if ($nota >= 7) {
        $aprovados[] = $nota;
    }
}

echo '<br>';
print_r($aprovados);

function alunosAprovados($nota): bool
{
    return $nota >= 7;
}

echo '<br>';
$aprovados2 = array_filter($notas, 'alunosAprovados');
print_r($aprovados2);

function calculoLegal($nota)
{
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais3 = array_map('calculoLegal', $notas);
print_r($notasFinais3);
