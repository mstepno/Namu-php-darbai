<?php
//Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
//Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
$string = md5(time());

$output = preg_replace_callback('/\d+/', function($matches) {
    $number = $matches[0];
    $chunks = preg_split('/(\d{2,})/', $number, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    if (count($chunks) == 1) {
        return "<h1>{$chunks[0]}</h1>";
    } else {
        $output = '';
        foreach ($chunks as $chunk) {
            if (is_numeric($chunk)) {
                $output .= $chunk;
            } else {
                $output .= "<h1>{$chunk}</h1>";
            }
        }
        return $output;
    }
}, $string);

echo $output;

  

  ?>