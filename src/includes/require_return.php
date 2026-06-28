<div class="title">Require com return</div>

<?php

$valorRetornado = require 'used_return.php';
echo "$valorRetornado<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$valorRetornado2 = require __DIR__ . '/non_used_return.php';
echo "$valorRetornado2<br>";
echo "$variavelDeclarada<br>";

$valorRetornado3 = include __DIR__ . '/non_used_return.php';
//var_dump($valorRetornado3);
echo "$valorRetornado3<br>";
