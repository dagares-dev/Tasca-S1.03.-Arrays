<?php
/*
Donat un array d’strings, fes un programa que:
Retorni un array on només estiguin els strings que tinguin 
un nom parell de caràcters usant la funció array_filter().
*/

declare (strict_types=1);

function hasEvenLength (string $text) : bool {
    return mb_strlen ($text) % 2 == 0;
}

$names = ["Zeus", "Ares", "Poseidón", "Afrodita", "Apolo","Atenea", "Hefesto"];

$result = array_filter ($names, 'hasEvenLength');

echo "<h2>Nivell 3</h2>";
echo "<h3>Exercici 2</h3>";

echo '<pre>';
print_r($names);
echo "\n";
echo "Dioses con nombres pares:\n";
print_r (array_values($result));
echo '</pre>';
