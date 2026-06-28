<div class="title">Desafio Include</div>

<?php
require_once 'usuario.php';

$usuario = new Usuario('João', 18, 'joao@example.com');
$usuario->apresentar();
unset($usuario);
