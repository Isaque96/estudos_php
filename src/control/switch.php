<div class="title">Switch</div>

<?php
$category = '';
$price = 0.0;
$car = '';

if ($category === 'Luxo') {
    $car = 'Mercedes';
    $price = 250000;
} elseif ($category === 'SUV') {
    $car = 'Renegade';
    $price = 80000;
} elseif ($category === 'Sedan') {
    $car = 'Etios';
    $price = 55000;
} else {
    $car = 'Mobi';
    $price = 33000;
}

$formatedPrice = number_format($price, 2, ',', '.');
echo "<p>Carro: $car<br>Preço: R$ $formatedPrice</p>";

$category = 'Suv Básico';
switch (strtolower($category)) {
    case 'luxo':
        $car = 'Mercedes';
        $price = 250000;
        break;
    case 'suv':
    case 'suv básico':
        $car = 'Renegade';
        $price = 80000;
        break;
    case 'sedan':
        $car = 'Etios';
        $price = 55000;
        break;
    default:
        $car = 'Mobi';
        $price = 33000;
        break;
}

$formatedPrice = number_format($price, 2, ',', '.');
echo "<p>Carro: $car<br>Preço: R$ $formatedPrice</p>";
?>