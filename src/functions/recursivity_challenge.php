<div class="title">Desafio Recursão</div>

<?php
$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]]];

function deepInArray(array $arr, string $nivel = '>'): void
{
    foreach ($arr as $val) {
        if (is_array($val)) {
            deepInArray($val, $nivel . $nivel[0]);
        } else {
            echo "$nivel $val<br>";
        }
    }
}

deepInArray($array, '#');
?>