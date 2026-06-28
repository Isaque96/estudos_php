<div class="title">Include Função</div>

<?php
echo 'Carregando: include_function.php<br>';

function carregarArquivo()
{
    include 'include_file.php';
    echo " O conteúdo da variável é: $variavel<br>";
    echo soma(1, 2) . '!<br>';
}

echo 'Novamente no arquivo include_function.php<br>';
//echo soma(3, 4) . '!<br>';
carregarArquivo();

echo "Variável = '{$variavel}'"; // Undefined
echo '<br>' . soma(3, 8);
