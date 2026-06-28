<div class="title">Tipo Float</div>

<?php
echo 1.1, '<br>';

var_dump(1.1); # Mesmo com o valor 1.0 ainda infere o valor float
echo '<br>';
var_dump(1.0);
echo '<br>';

echo PHP_FLOAT_MAX, '<br>';
echo PHP_FLOAT_MIN, '<br>';
echo 1.2e3, '<br>'; # 1200
echo 13E-3; # 0.013
?>