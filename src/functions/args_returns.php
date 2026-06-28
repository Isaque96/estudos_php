<div class="title">Argumentos e Retornos</div>

<?php
function getMessage()
{
    return 'Seja bem-vindo ao PHP!';
}

$message = getMessage();
echo "$message<br>";
echo getMessage();
echo "<br>";

var_dump(getMessage());
echo "<br>";

function getMessageWithName($name)
{
    return "Bem vindo, {$name}!";
}

echo '<br>', getMessageWithName('Testerson'), '<br>';

function soma($a, $b)
{
    return $a + $b;
}

$resultado = soma(2, 3);
echo "O resultado da soma é: $resultado<br>";
$x = 10;
$y = 15;
$resultado = soma($x, $y);
echo "O resultado da soma é: $resultado<br>";

function changeValue($a, $newValue)
{
    $a = $newValue;
}

$w = 1;
changeValue($w, 3);
echo '<br>', $w, '<br>';

function realChangeValue(&$a, $newValue)
{
    $a = $newValue;
}

realChangeValue($w, 5);
echo $w, '<br>';
?>
