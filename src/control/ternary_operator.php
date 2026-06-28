<div class="title">Operador Ternário</div>

<?php
$age = 70;
$status;

if ($age >= 18) {
    $status = 'Maior idade';
} else {
    $status = 'Menor idade';
}

echo "$status<br>";

$age = 5;
$status = $age >= 18 ? 'Maior idade' : 'Menor idade';

echo "$status<br>";

$status = $age >= 18 ? ($age >= 65 ? 'Aposentado' : 'Maior idade') : 'Menor idade';
?>