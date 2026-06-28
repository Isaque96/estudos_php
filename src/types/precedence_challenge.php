<div class="title">Desafio Precedência</div>

<p>1. Qual será o valor impresso?</p>
<?php
try {
    $nonNumeric = + 5 * 3 + (12 / 6) / (-8 + 2 ** 3);
} catch (DivisionByZeroError $dbze) {
    echo "Erro: " . $dbze->getMessage();
}
?>

<p>2. Qual expressão imprime o valor 100?</p>
<p>a) <?= (1 + 2) * 20 - 15 ?></p>
<p>b) <?= 4 * 5 ** 2 ?></p>
<p>c) <?= 2 ** 3 ** 4 / 1e25 ?></p>
<p>d) <?= 3 + (3 * 8) / 2 - 3 ?></p>
