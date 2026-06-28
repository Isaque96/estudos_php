<div class="title">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente')
{
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água')
{
    echo "Para comer: $comida<br>";
    echo "Para beber: $bebida<br>";
}

anotarPedido('Hamburger');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida)
{
    echo "Para comer: $comida<br>";
    echo "Para beber: $bebida<br>";
}

//anotarPedido('Hamburger');
anotarPedido2('Refrigerante', 'Pizza');
?>