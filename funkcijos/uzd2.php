<?php
//Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
// įterpiamas į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;
function printH1($text, $num) {
  echo "<h$num>$text</h$num>";
}

function printCustomH($text, $num) {
  if ($num >= 1 && $num <= 6) {
    printH1($text, $num);
  } else {
    echo "Netinkamas tago numeris. Turi būti nuo 1 iki 6.";
  }
}
    printCustomH("Labas, funkcija!", 3);
    printCustomH("Labas, funkcija!", 7);
  

  
  ?>