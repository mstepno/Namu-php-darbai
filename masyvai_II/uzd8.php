<?php
/*Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10.
 Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.*/

function generateArray() {
    $result = array();
    for ($i = 0; $i < 10; $i++) {
        $rand = rand(0, 5);
        if ($rand == 0) {
            $result[] = rand(0, 10);
        } else {
            $subarray = array();
            for ($j = 0; $j < $rand; $j++) {
                $subarray[] = rand(0, 10);
            }
            $result[] = $subarray;
        }
    }
    return $result;
}

$array = generateArray();
print_r($array);
?>
