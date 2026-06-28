<div class="title">Desafio Palíndromo</div>

<?php

function palindromeNonUsual($word)
{
    $last = strlen($word) - 1;
    for ($i = 0; $i <= $last; $i++) {
        if ($word[$i] !== $word[$last - $i]) {
            return 'Não';
        }
    }

    return 'Sim';
}

echo palindromeNonUsual('arara') . ' ';
echo palindromeNonUsual('ana') . ' ';
echo palindromeNonUsual('abccba') . ' ';
echo palindromeNonUsual('bola') . ' ';
echo '<br>';

function palindrome($word)
{
    $newValue = strrev($word);

    return $word === $newValue ? 'Sim' : 'Não';
}

echo palindromeNonUsual('arara') . ' ';
echo palindromeNonUsual('ana') . ' ';
echo palindromeNonUsual('abccba') . ' ';
echo palindromeNonUsual('bola') . ' ';
