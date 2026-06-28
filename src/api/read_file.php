<div class="title">Ler Arquivo</div>

<?php
$file = fopen('teste.txt', 'r');
echo fread($file, 10);
echo '<br/>';
echo fread($file, 10);
fclose($file);

echo '<hr>';

$file = fopen('teste.txt', 'r');
$length = filesize('teste.txt');
echo $length . ' bytes<br/>';
echo fread($file, $length);
fclose($file);

echo '<hr>';

$file = fopen('teste.txt', 'r');
echo fgets($file) . '<br/>';
echo fgets($file) . '<br/>';
var_dump(fgets($file));
echo '<br/>';
fclose($file);

echo '<hr>';

$file = fopen('teste.txt', 'r');
while (!feof($file)) {
    echo fgets($file) . '<br/>';
}
fclose($file);

$file = fopen('teste.txt', 'r');
while (!feof($file)) {
    echo fgetc($file); // caracter por caracter
}
echo '<br/>';
fclose($file);

echo '<hr>';

$file = fopen('teste.txt', 'r+');
echo fgets($file) . '<br/>';
echo fgets($file) . '<br/>';
fwrite($file, 'Escrevendo no arquivo durante a leitura');
fclose($file);

echo 'Fim';
