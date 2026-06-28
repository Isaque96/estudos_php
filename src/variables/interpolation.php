<div class="title">Interpolação</div>

<?php
$number = 10;
echo $number;
echo '<br> $number';
echo "<br> $number";

$text = "A sua note é: $number";
echo "<br> $text";

$obj = 'caneta';
// echo "<br> Eu tenho 5 $objs"; # gera warning
echo "<br> Eu tenho 5 {$obj}s";
echo "<br> Eu tenho 5 { $obj}s mas perdi 3 {$obj }s";
// Não é possível fazer operações dentro do chaves da interpolação
?>