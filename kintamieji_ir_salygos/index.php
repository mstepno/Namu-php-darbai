//Pirma uzduotis:
<?php
//Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
//"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
$vardas = "Petras";
$pavarde = "Petraitis";
$gimimo_metai = 2000;
$sia_data = 2023;
$amzius = $sia_data - $gimimo_metai;
echo "Aš esu $vardas $pavarde. Man yra $amzius metai.\n";
?>

//Antra uzduotis:
<?php
//Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand()
// jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
//Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
$a = rand(0, 4);
$b = rand(0, 4);
$did = max($a, $b);
$maz = min($a, $b);
if ($maz != 0) {
  $rez = round($did / $maz, 2);
} else {
  $rez = "Dalyba iš 0 negalima.";
}
echo "Didesnė reikšmė: $did\nMažesnė reikšmė: $maz\nRezultatas: $rez\n";
?>

//Septinta uzduotis:
<?php
// Naudokite funkcija rand(). 
//Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni.
$number1 = rand(-10, 10);
$number2 = rand(-10, 10);
$number3 = rand(-10, 10);

$color1 = ($number1 < 0) ? 'green' : (($number1 > 0) ? 'blue' : 'red');
$color2 = ($number2 < 0) ? 'green' : (($number2 > 0) ? 'blue' : 'red');
$color3 = ($number3 < 0) ? 'green' : (($number3 > 0) ? 'blue' : 'red');

echo "<span style='color: $color1;'>$number1</span>, ";
echo "<span style='color: $color2;'>$number2</span>, ";
echo "<span style='color: $color3;'>$number3</span>";
?>

//Ketvirta uzduotis:
<?php
//Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
//Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    echo "Galima sudaryti trikampį su kraštinėmis: $a, $b, $c.";
  } else {
    echo "Negalima sudaryti trikampio su kraštinėmis: $a, $b, $c.";
  }
  ?>

//Penkta uzduotis:
  <?php
  //Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2.
  // Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;
for ($i = 0; $i < 4; $i++) {
  $sk = rand(0, 2);
  if ($sk == 0) {
    $nuliai++;
  } else if ($sk == 1) {
    $vienetai++;
  } else {
    $dvejetai++;
  }
}
echo "Nulių skaičius: $nuliai\nVienetų skaičius: $vienetai\nDvejetų skaičius: $dvejetai\n";
?>

//Sesta uzduotis":
<?php
//Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. 
//Pvz skaičius 3- rezultatas: <h3>3</h3>
$random_number = rand(1, 6);
echo "<h$random_number>$random_number</h$random_number>";
?>