<div class="title">Include Once</div>

<?php
// Existe tanto o include_once quanto o require_once
// A diferença é a mesma do include e do require

include('include_once_file.php');
//require_once 'include_once_file.php';

echo "Variável = '{$variavel}'<br>";
$variavel = 'Variável alterada!';
echo "Variável = '{$variavel}'<br>";

include('include_once_file.php');

echo "Variável = '{$variavel}'<br>";
$variavel = 'Variável alterada!';
echo "Variável = '{$variavel}'<br>";

include_once('include_once_file.php');
echo "Variável = '{$variavel}'<br>";
$variavel = 'Variável alterada!';
echo "Variável = '{$variavel}'<br>";

require_once('include_once_file.php');
echo "Variável = '{$variavel}'<br>";
