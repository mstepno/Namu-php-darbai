<?php
//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis).
// Atspausdinti trumpesnį stringą.
$vardas = "Gary";
$pavarde = "Oldman";

if (strlen($vardas) < strlen($pavarde)) {
    echo $vardas;
} else {
    echo $pavarde; //(Gary)
}
ob_clean();
//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
 //Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
 $vardas = "Gary";
 $pavarde = "Oldman";

 echo strtoupper($vardas) ." ". strtolower($pavarde); //GARY oldman

 ob_clean();
 //Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
 //Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
 $vardas = "Gary";
 $pavarde = "Oldman";

 $pirmaRaide = substr($vardas, 0, 1) . substr($pavarde, 0, 1);
 echo $pirmaRaide; //GO

 ob_clean();
 //Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
 //Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
 $vardas = "Gary";
 $pavarde = "Oldman";
 
 $paskutinesTrysRaides = substr($vardas, -3) . substr($pavarde, -3);
 
 echo $paskutinesTrysRaides; //aryman

 ob_clean();
 //Sukurti kintamąjį su stringu: “An American in Paris”.
//Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
$sakinys = "An American in Paris";
$pakeistas = str_ireplace("a", "*", $sakinys);
echo $pakeistas; //*n *meric*n in P*ris

ob_clean();
//Sukurti kintamąjį su stringu: “An American in Paris”. 
//Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
$sakinys = "An American in Paris";
$a_kiekis = substr_count(strtolower($sakinys), 'a');
echo $a_kiekis; //4

ob_clean();
//Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. 
//Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
$sakinys = "An American in Paris";
$sakinys_be_balsiu = str_ireplace(['a', 'e', 'i', 'o', 'u'], '', $sakinys);

$sakinys1 = "Breakfast at Tiffany's";
$sakinys2 = "2001: A Space Odyssey";
$sakinys3 = "It's a Wonderful Life";

$sakinys1_be_balsiu = str_ireplace(['a', 'e', 'i', 'o', 'u'], '', $sakinys1);
$sakinys2_be_balsiu = str_ireplace(['a', 'e', 'i', 'o', 'u'], '', $sakinys2);
$sakinys3_be_balsiu = str_ireplace(['a', 'e', 'i', 'o', 'u'], '', $sakinys3);

echo $sakinys_be_balsiu  . ", " . //n mrcn n Prs
     $sakinys1_be_balsiu . ", " . //Brkfst t Tffny's
     $sakinys2_be_balsiu . ", " . //2001: Spc dyssy
     $sakinys3_be_balsiu;         //t's Wndrfl Lf

ob_clean();
//Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood”,
// yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu.
$stringas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$zodziai = explode(' ', $stringas); 

$skaicius = 0;
foreach ($zodziai as $zodis) {
    if (strlen($zodis) <= 5) {
        $skaicius++;
    }
}
   echo "Žodžių trumpesnių arba lygių nei 5 raidės yra: " . $skaicius.  ". " ; //Žodžių trumpesnių arba lygių nei 5 raidės yra 11

$stringas = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$zodziai = explode(' ', $stringas);

$skaicius = 0;
foreach ($zodziai as $zodis) {
    if (mb_strlen($zodis) <= 5) {
        $skaicius++;
    }
}
    echo "Žodžių trumpesnių arba lygių nei 5 raidės yra: " . $skaicius; //Žodžių trumpesnių arba lygių nei 5 raidės yra 4

ob_clean();
//Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
    $characters = 'abcdefghijklmnopqrstuvwxyz';
$randomString = '';
$length = 3;

for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, strlen($characters) - 1)];
}

echo $randomString;

ob_clean();
//Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
//o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)
$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$words1 = explode(" ", $string1); 
$words2 = explode(" ", $string2); 

$allWords = array_merge($words1, $words2); 
$uniqueWords = array_unique($allWords); 

$randomWords = array_rand($uniqueWords, 10); 
$randomString = "";

foreach ($randomWords as $wordIndex) {
  $randomString .= $uniqueWords[$wordIndex] . " ";
}

echo $randomString;
?>