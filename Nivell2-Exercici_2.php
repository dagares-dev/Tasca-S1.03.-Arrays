<?php
/*
Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, 
ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.
*/

declare(strict_types=1);


function calcularMitjana(array $notes): float
{
    return array_sum($notes) / count($notes);
}

$classe = [
    "Jordi" => [3, 7, 5, 5, 8],
    "Juan" => [5, 6, 4, 7, 5],
    "Silvia" => [4, 7, 9, 9, 4],
    "Patricia" => [3, 5, 4, 6, 2]
];

echo "<h2>Nivell 2</h2>";
echo "<h3>Exercici 2</h3>";

echo "<h4>Notes de la classe</h4>";


foreach ($classe as $alumne => $notes) {
    echo $alumne . ": " . implode(", ", $notes) . "<br>";
}

echo "<br>";


$sumaTotalNotes = 0;
$totalNotes = 0;

foreach ($classe as $alumne => $notes) {

    $mitjana = calcularMitjana($notes);

    echo "La nota mitjana de " . $alumne . " és: " . $mitjana . "<br>";

    $sumaTotalNotes = $sumaTotalNotes + array_sum($notes);
    $totalNotes = $totalNotes + count($notes);
}

$mitjanaClasse = $sumaTotalNotes / $totalNotes;

echo "<br>";
echo "La nota mitjana de la classe és: " . $mitjanaClasse;

?>