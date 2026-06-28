<br/>Datas #02<br/>

<?php
$formatDate1 = new IntlDateFormatter("pt_BR", IntlDateFormatter::FULL, IntlDateFormatter::FULL);
$formatDate1->setPattern("EEEE, d 'de' MMMM 'de' y");

$formatDate2 = new IntlDateFormatter("pt_BR", IntlDateFormatter::FULL, IntlDateFormatter::FULL);
$formatDate2->setPattern("dd/MM/yyyy");

$formatDateTime = new IntlDateFormatter("pt_BR", IntlDateFormatter::FULL, IntlDateFormatter::FULL);
$formatDateTime->setPattern("EEEE, d 'de' MMMM 'de' y - HH:mm:ss");

$now = new DateTime();

echo $formatDate1->format($now) . "<br/>";
echo $formatDate2->format($now) . "<br/>";

$tomorrow = new DateTime("+1 day");
echo $formatDate2->format($tomorrow) . "<br/>";
echo $formatDateTime->format($now) . "<br/>";

$fixedDate = new DateTime("2024-06-15 14:30:00");
echo $formatDateTime->format($fixedDate) . "<br/>";

$tomorrow->modify("+1 day");
echo $formatDateTime->format($tomorrow) . "<br/>";

$tomorrow->setDate(2024, 6, 20);
echo $formatDateTime->format($tomorrow) . "<br/>";

$passedDate = new DateTime("2024-06-10 09:15:00");
$futureDate = new DateTime("2024-06-25 18:45:00");

echo ($passedDate < $futureDate) ? "A data passada é anterior à data futura." : "A data passada é posterior à data futura.";
echo "<br/>";

echo ($futureDate > $passedDate) ? "A data futura é posterior à data passada." : "A data futura é anterior à data passada.";
echo "<br/>";

$otherDate = new DateTime("2024-06-25 12:00:00");
echo ($otherDate === $futureDate) ? "As datas são iguais." : "As datas são diferentes.";
echo "<br/>";

$interval = $passedDate->diff($futureDate);
echo $interval->days . " dias de diferença";

$tz = new DateTimeZone('America/Sao_Paulo');
$dateWithTZ = new DateTime("now", $tz);
echo "<br/>Data e hora com fuso horário de São Paulo: " . $dateWithTZ->format('Y-m-d H:i:s') . "<br/>";
?>
