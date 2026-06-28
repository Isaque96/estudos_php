<div class="title">Closure & Callable</div>

<?php
$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b)
{
    return $a + $b;
}

echo $soma1(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

/*$soma1 = 1;
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';*/

echo soma2(2, 3) . '<br>';
echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>'; // Tem que passar o nome em string

var_dump($soma1);

function executar($a, $b, $op, callable $funcao)
{
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar(100, 100, '+', $soma1);
executar(3000, 3000, '+', 'soma2'); // Sempre que for passar apenas o nome de uma função para callable tem que ser string
/**
 * Para o exemplo do professor não funcionou devido a versão mais recente(>8)
 * Esse problema do closure que se dava dessa interpretação pelo nome explícito, não existe, pois temos que informar ele como string.
 * Nas versões inferiores a 8 ele entendia o nome sem aspas pois tratava como string não definida
*/

/**
 * No PHP até a versão 7.4, o is_callable() aceitava, de forma implícita, o nome de uma função sem aspas, tratando-o como uma constante de string não definida.
 * Ou seja:
 *
 * function teste() { echo 'teste'; }
 *
 * is_callable(teste); // Interpretado como is_callable('teste')
 * Isso funcionava porque, se teste não fosse uma constante definida, o PHP emitia apenas um notice e convertia para a string "teste" automaticamente.
 *
 * No PHP 8.0, essa conversão implícita foi removida. Passar identificadores não entre aspas que não sejam constantes válidas agora resulta em erro de compilação (Error: Undefined constant), e o código nem é executado.
 *
 * Portanto, a forma correta e compatível a partir do PHP 8 é:
 *
 * is_callable('teste'); // Correto
 * Essa mudança foi feita para evitar ambiguidades e comportamentos inesperados, reforçando a tipagem mais estrita da linguagem.
*/
?>