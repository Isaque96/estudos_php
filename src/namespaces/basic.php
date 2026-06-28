<?php

namespace Contexto;

?>

<div class="title">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>'; // Contexto
const CONSTANTE = 123;
define('Contexto\OUTRA_CONSTANTE', 456); // Tem que ter o namespace
define(__NAMESPACE__ . '\UMA_CONSTANTE', 789); // Tem que ter o namespace
define('OutroContexto\CONSTANTE', 321); // Tem que ter o namespace

echo CONSTANTE . '<br>';
echo OUTRA_CONSTANTE . '<br>';
echo UMA_CONSTANTE . '<br>';
echo \OutroContexto\CONSTANTE . '<br>'; // Tem que ter a barra invertida
echo constant(__NAMESPACE__ . '\CONSTANTE') . '<br>'; // Tem que ter o namespace

// Se angente não indica com o \ que está começando do namespace raiz, o PHP procura dentro do namespace atual
// Por isso a necessidade de usar a barra invertida para indicar que está começando do namespace

function soma($a, $b)
{
    return $a + $b;
}

echo \Contexto\soma(1, 2) . '<br>'; // Tem que ter a barra invertida

function strpos($str, $text)
{
    echo 'Buscando ' . $text . ' em ' . $str . '<br>';
    return 1;
}

echo strpos('Texto genérico', 'x') . '<br>'; // Chama a função do namespace atual
echo \strpos('Texto genérico', 'x') . '<br>'; // Chama a função do namespace global
?>