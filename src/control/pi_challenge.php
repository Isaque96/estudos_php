<div class="title">Desafio PI</div>

<?php
echo pi();
$pi = 3.14;

if ($pi === pi()) {
    echo '<br>Iguais!';
} else {
    echo '<br>Diferentes';
}

// Operador Relacional
$wrongPi = 2.8;

// Resposta
echo '<br>' . ($pi - pi());
echo '<br>' . ($pi - $wrongPi);

if ($pi - pi() <= 0.01) {
    echo '<br>Praticamente iguais!';
} else {
    echo '<br>Valor errado!';
}
?>