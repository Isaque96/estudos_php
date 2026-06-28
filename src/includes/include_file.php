<?php

echo "Carregando include_file.php<br>";

$variavel = 'Estou definida em include_file.php';
if (!function_exists('soma')) {
    function soma($a, $b)
    {
        return $a + $b;
    }
}
