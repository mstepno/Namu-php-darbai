<?php
ob_clean();
//Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais
// ir suskaičiuokite kiek tarp jų yra didesnių už 150.
//  Skaičiai didesni nei 275 turi būti raudonos spalvos.
$count = 0;
for ($i = 0; $i < 300; $i++) {
  $skaicius = rand(0, 300);
  if ($skaicius > 275) {
    echo "<span style='color:red'>$skaicius</span> ";
  } else {
    echo "$skaicius";
  }
  if ($skaicius > 150) {
    $count++;
  }
}
echo "<br>";
echo "Didesnių už 150 skaičių kiekis: $count";

ob_clean();
//Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais.
 //Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik pirminius skaičius (t.y tokius, 
 //kurie dalinasi be liekanos tik iš 1 ir patys savęs). Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
 
 $skaiciai = [];
 while (count($skaiciai) < 50) {
     $skaicius = rand(1, 200);
     if (!in_array($skaicius, $skaiciai)) {
         $skaiciai[] = $skaicius;
     }
 }

 sort($skaiciai);

 $pirminiai = [];
 foreach ($skaiciai as $skaicius) {
     if (isPrime($skaicius)) {
         $pirminiai[] = $skaicius;
     }
 }
 
 $skaiciaiString = implode(' ', $skaiciai);
 $pirminiaiString = implode(' ', $pirminiai);

 echo "Sugeneruoti skaičiai: $skaiciaiString\n";
 echo "Pirminiai skaičiai: $pirminiaiString\n";
 
 function isPrime($skaicius) {
     if ($skaicius < 2) {
         return false;
     }
     for ($i = 2; $i <= sqrt($skaicius); $i++) {
         if ($skaicius % $i == 0) {
             return false;
         }
     }
     return true;
 }
 ?>
 



