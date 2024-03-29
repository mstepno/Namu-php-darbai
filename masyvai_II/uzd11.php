<?php
/*
Duotas kodas, generuojantis masyvą:
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, match, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo pagrindas turi būti matematinis.

Atsakymą reikia pateikti formatu:
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';
Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.
*/

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);

$long = rand(10,30);
$sk1 = $sk2 = 0;
$diff = $b - $a;

$c = [];
for ($i=0; $i<$long; $i++) {
    $x = pow(-1, rand(0,1)) * rand(0, $diff) + $a;
    $c[] = $x;
    $sk1 += ($x == $a);
    $sk2 += ($x == $b);
}

echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';

echo '<h3>Skaičius '.$a.' yra pakartotas '.$sk1.' kartų, o skaičius '.$b.' - '.$sk2.' kartų.</h3>';
?>