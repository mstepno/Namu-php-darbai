<?php
//Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) 
//Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;
function countDivisors($number) {
    $count = 0;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $count += 2; 
        }
    }
    if (sqrt($number) == floor(sqrt($number))) { 
        $count--;
    }
    return $count;
}

echo countDivisors(12) . ' ' . countDivisors(16);

?>