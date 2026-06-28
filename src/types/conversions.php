<div class="title">Conversões</div>

<?php
echo is_int(PHP_INT_MAX);

// int para float
echo "<p>Int para float</p>";
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1 + 1.0);
echo '<br>';
var_dump((float) 3);

// float para int
echo "<p>Float para int</p>";
var_dump((int) 2.8);
echo '<br>';
var_dump(intval(2.8, 10));
echo '<br>';
var_dump((int) round(2.8));

// operações com string
echo "<p>Strings</p>";
var_dump(3 + "2");
echo '<br>';
var_dump("3" + 2);
echo '<br>';
var_dump("3" . 2);
echo '<br>', is_string("3" . 2);
echo '<br>', is_string("3" + 2);
echo '<br>';
// var_dump(1 + "five"); # lança exceção
// echo '<br>';'
// var_dump(1 + "5 five"); # aviso de problema
// echo '<br>';
// var_dump(1 + "five 5"); # lança exceção
// echo '<br>';
// var_dump(1 + "1+2"); # aviso de problema.
// echo '<br>';
var_dump(1 + "3.2");
echo '<br>';
var_dump(1 + "-3.2e2");
echo '<br>';
var_dump((int) "10.5");
echo '<br>';
var_dump((float) "10.5");
?>