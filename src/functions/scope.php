<div class="title">Função & Escopo</div>

<?php
function printMessage()
{
    echo "Olá, eu sou uma função!<br>";
}

printMessage();
printMessage();
printMessage();

$variable = 1;
function changeVariable()
{
    $variable = 2;
    echo "Dentro da função: $variable<br>";
}
echo "Antes da função: $variable<br>";
changeVariable();
echo "Depois da função: $variable<br>";

function changeVariableGlobal()
{
    global $variable;
    $variable = 3;
    echo "Dentro da função: $variable<br>";
}
echo "Antes da função: $variable<br>";
changeVariableGlobal();
echo "Depois da função: $variable<br>";
var_dump(changeVariableGlobal());
?>