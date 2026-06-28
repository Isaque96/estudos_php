<div class="title">Operadores Relacionais</div>


<?php
var_dump(1 == 1);
echo '<br>';
var_dump(1 > 1);
echo '<br>';
var_dump(1 >= 1);
echo '<br>';
var_dump(1 < 1);
echo '<br>';
var_dump(1 <= 1);
echo '<br>';
var_dump(1 != 1);
echo '<br>';
var_dump(1 <> 1);
echo '<br>';

var_dump(111 == '111');
echo '<br>';
var_dump(111 === '111');
echo '<br>';
var_dump(111 != '111');
echo '<br>';
var_dump(111 !== '111');
?>

<hr><p>Relacionais no If/Else</p><hr>

<?php
$age = 25;
if ($age < 18) {
    echo 'Menor de idade<br>';
} elseif ($age < 65) {
    echo 'Adulto<br>';
} else {
    echo 'Terceira idade!';
}
?>

<hr><p>Spaceship</p><hr>

<?php
var_dump(5 <=> 3);
echo '<br>';
var_dump(50 <=> 50);
echo '<br>';
var_dump(5 <=> 50);
?>

<hr><p>Valores podem ser V ou F</p><hr>

<?php
var_dump(!!5);
?>