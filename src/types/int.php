<div class="title">Tipo Inteiro</div>

<?php
echo 11;
echo '<br>';

var_dump(11);
echo '<br>';

echo PHP_INT_MAX, '<br>';
echo PHP_INT_MIN, '<br>';
echo 011, '<br>'; # Com o 0 na frente, ele entende como base Octal
echo 017, '<br>'; # Base OCTAL
echo 0b11000111001, '<br>';  # Com o 0b na frente, ele entende como base binária
echo 0x117acf0; #  Com o 0x na frente, ele entende como base hexadecimal
?>