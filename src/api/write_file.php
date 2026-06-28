<div class="title">Escrever em Arquivo</div>

<?php
$file = fopen("teste.txt", "w+");
fwrite($file, "Escrevendo no arquivo teste.txt");
$str = "\nEscrevendo mais uma linha no arquivo teste.txt";
fwrite($file, $str);
fclose($file);

$file = fopen("teste.txt", "w");
fwrite($file, "Escrevendo novo arquivo teste.txt sobrescrevendo o antigo");
fclose($file);

$file = fopen("teste.txt", "a");
fwrite($file, "\nEscrevendo mais uma linha no arquivo teste.txt");
fclose($file);

ini_set("display_errors", 1);
$file = fopen("teste.txt", "x");
?>