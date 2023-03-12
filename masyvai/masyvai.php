<?php
ob_clean();
//Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.
$array = array_fill(0, 30, 0);
for ($i = 0; $i < count($array); $i++) {
  $array[$i] = rand(5, 25);
}
print_r($array);
ob_clean();

//Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
$arr = array();
$letters = array('A', 'B', 'C', 'D');

for ($i = 0; $i < 200; $i++) {
    $arr[] = $letters[rand(0, 3)];
}

$countA = $countB = $countC = $countD = 0;

foreach ($arr as $value) {
    switch ($value) {
        case 'A':
            $countA++;
            break;
        case 'B':
            $countB++;
            break;
        case 'C':
            $countC++;
            break;
        case 'D':
            $countD++;
            break;
        default:
            break;
    }
}

echo "A raidžių kiekis: $countA\n";
echo "B raidžių kiekis: $countB\n";
echo "C raidžių kiekis: $countC\n";
echo "D raidžių kiekis: $countD\n";
//Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
$letters = array('A', 'B', 'C', 'D');
$arr = array();
for ($i = 0; $i < 200; $i++) {
  $arr[] = $letters[rand(0, 3)]; 
}
sort($arr);
foreach ($arr as $letter) {
  echo $letter . ' ';
}



?>

