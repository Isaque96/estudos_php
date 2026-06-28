<div class="title">Erros Personalizados</div>

<?php
class AgeGroupException extends Exception
{
    public function __construct($message, $code = 0, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

function calculateRetirementTime($age)
{
    if ($age < 18) {
        throw new AgeGroupException('Ainda é muito cedo, está muito longe da aposentadoria!');
    }

    if ($age > 70) {
        throw new AgeGroupException('Já deveria estar aposentado!');
    }

    return 70 - $age;
}

$assessedAges = [15,30,60,80];

foreach ($assessedAges as $age) {
    try {
        $remainingTime = calculateRetirementTime($age);
        echo "Idade: $age, $remainingTime anos restantes<br>";
    } catch (AgeGroupException $e) {
        echo "Não foi possível calcular a idade $age.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
    echo '<br>';
}

echo "Fim!";
