<div class="title">Atribuições</div>

<?php
$title = "Atribuições";
$number = 10;
echo $number;
$number = $number - 3;
echo '<br>' . $number;
$number = $number + 1.5;
echo '<br>' . $number;
$number--;
--$number;
echo '<br>' . $number;
$number++;
++$number;
echo '<br>' . $number;
$number = 20;
echo '<br>' . $number;
$number -= 5;
echo '<br>' . $number;
$number += 5;
echo '<br>' . $number;
$number *= 10;
echo '<br>' . $number;
$number /= 2;
echo '<br>' . $number;
$number %= 6;
echo '<br>' . $number;
$number **= 4;
echo '<br>' . $number;

$number .= 4;
echo '<br>' . $number;

$text = "Esse é um texto";
echo '<br>' . $texto;
$text = $text . ' qualquer';
echo '<br>' . $texto;
$text .= ' de verdade!';
echo '<br>' . $texto;

// $nonExistentVariable = 'valor existente';
echo '<br>' . $nonExistentVariable;
$val = $nonExistentVariable ?? 'valor padrão';
echo '<br>' . $val;
?>