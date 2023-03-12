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
//Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. 
//Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
ob_clean();
function generateUniqueNumbersArray($min, $max, $count) {
    $numbers = range($min, $max); 
    shuffle($numbers); 
    return array_slice($numbers, 0, $count); 
  }
  
  $array1 = generateUniqueNumbersArray(100, 999, 100);
  $array2 = generateUniqueNumbersArray(100, 999, 100);
  
  echo 'Array 1: ' . implode(', ', $array1) . '<br>';
  echo 'Array 2: ' . implode(', ', $array2) . '<br>';
  ob_clean();
  
  /*Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
  Trečias, pirmo ir antro suma. 
  Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.*/
  $array = array(rand(5, 25), rand(5, 25));
  for ($i = 2; $i < 10; $i++) {
    $array[$i] = $array[$i - 2] + $array[$i - 1];

  print_r($array);
  }
?>

