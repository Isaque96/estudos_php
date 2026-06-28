<div class="title">Datas #01</div>

<?php
echo time() . "<br>";
echo date("D, d \d\e M \d\e Y H:i A") . "<br>";

echo strftime("%A, %d de %B de %Y", time()) . "<br>";
setlocale(LC_TIME, "pt_BR", "Portuguese_Brazil.1252", "portuguese");
echo strftime("%A, %d de %B de %Y", time()) . "<br>";

// 1. Sem locale (equivalente ao strftime em inglês)
$date = new DateTime();
$formatter = new IntlDateFormatter(
    'en_US',
    IntlDateFormatter::NONE,
    IntlDateFormatter::NONE,
    null,
    null,
    "EEEE, dd 'de' MMMM 'de' yyyy"
);
echo $formatter->format($date) . "<​br>";

// 2. Com locale pt_BR (equivalente ao strftime com setlocale)
$formatter = new IntlDateFormatter(
    'Portuguese_Brazil.1252',
    IntlDateFormatter::NONE,
    IntlDateFormatter::NONE,
    null,
    null,
    "EEEE, dd 'de' MMMM 'de' yyyy"
);
echo $formatter->format($date) . "<​br>";

$tomorrow = time() * (24 * 60 * 60);
echo date("D, d \d\e M \d\e Y H:i A", $tomorrow) . "<br>";

$nextWeek = strtotime("+1 week");
echo date("D, d \d\e M \d\e Y H:i A", $nextWeek) . "<br>";

$fixedDate = mktime(15, 30, 0, 12, 25, 2024);
echo strftime("%A, %d de %B de %Y %H:%M:%S", $fixedDate) . "<br>";
