<div class="title">Desafio Switch</div>

<form action="#" method="post">
  <input type="text" name="param">
  <select name="conversion" id="conversion">
    <option value="km-milha">KM -> Milha</option>
    <option value="milha-km">Milha -> KM</option>
    <option value="metro-km">Metro -> KM</option>
    <option value="km-metro">KM -> Metro</option>
    <option value="cel-fah">Celsius -> Farenheit</option>
    <option value="fah-cel">Farenheit -> Celsius</option>
  </select>
  <button>Calcular</button>
</form>

<style>
  form > * {
    font-size: 1.8rem;
  }
</style>

<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;
const FATOR_CEL_FAH = 1.8;

$param = $_POST['param'] ?? 0;
$text = strtolower($_POST['conversion'] ?? '');

switch ($text) {
    case 'km-milha':
        $distance = $param * FATOR_KM_MILHA;
        $message = "$param KM(s) = $distance Milha(s)";
        break;
    case 'milha-km':
        $distance = $param / FATOR_KM_MILHA;
        $message = "$param Milha(s) = $distance KM(s)";
        break;
    case 'metro-km':
        $distance = $param * FATOR_METRO_KM;
        $message = "$param Metro(s) = $distance KM(s)";
        break;
    case 'km-metro':
        $distance = $param / FATOR_METRO_KM;
        $message = "$param KM(s) = $distance Metro(s)";
        break;
    case 'cel-fah':
        $conversion = $param * FATOR_CEL_FAH + 32;
        $message = "{$param}º Celsius = {$conversion}º Farenheit";
        break;
    case 'fah-cel':
        $distance = ($param - 32) / FATOR_CEL_FAH;
        $message = "{$param}º Farenheit = {$conversion}º Celsius";
        break;
    default:
        $message = 'Nenhum valor calculado!';
}

echo "<p>$message</p>"
?>