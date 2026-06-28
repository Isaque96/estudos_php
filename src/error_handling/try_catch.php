<div class="title">Try/Catch</div>

<?php
// echo 7/0;
// echo intdiv(7, 0);

try {
    intdiv(7, 0);
} catch (Error $e) {
    echo 'Teve um erro aqui!<br>';
}

try {
    throw new Exception('Um erro muito estranho!');
    echo intdiv(7, 0);
} catch (DivisionByZeroError $dbze) {
    echo 'Divisão por zero<br>';
} catch (Throwable $ex) {
    echo 'Erro encontrado: ' . $ex->getMessage() . '<br>';
} finally {
    echo 'Sempre executado<br>';
}

echo 'Execução continua...';
