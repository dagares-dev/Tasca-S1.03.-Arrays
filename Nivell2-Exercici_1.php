<?php
/*
Imagina que tens dues llistes de convidats(representats/es únicament per noms). Fes un programa que et retorni:
-La llista de convidats en comú entre les dues llistes.
-La mescla de la llista de convidats(sense repeticions).
-La llista de convidats exclusius de la primera llista.
-La llista de convidats exclusius de la segona llista.
*/

declare(strict_types=1);

function obtenirComuns(array $llistaA, array $llistaB): array
{
    $comuns = [];

    foreach ($llistaA as $nom) {
        if (in_array($nom, $llistaB)) {
            $comuns[] = $nom;
        }
    }

    return $comuns;
}

function obtenirMescla(array $llistaA, array $llistaB): array
{
    $mescla = $llistaA;

    foreach ($llistaB as $nom) {
        if (!in_array($nom, $mescla)) {
            $mescla[] = $nom;
        }
    }

    return $mescla;
}

function obtenirExclusius(array $llista1, array $llista2): array
{
    $exclusius = [];

    foreach ($llista1 as $nom) {
        if (!in_array($nom, $llista2)) {
            $exclusius[] = $nom;
        }
    }

    return $exclusius;
}

$llistaA = ["Pep", "Marisa", "Carles", "Elena", "Roberto"];
$llistaB = ["Roberto", "Vanesa", "Elena", "Marcos", "Pilar"];

echo "<h2>Nivell 2</h2>";
echo "<h3>Exercici 1</h3>";
echo "<pre>";

echo "Llista A: " . implode(", ", $llistaA) . "\n";
echo "Llista B: " . implode(", ", $llistaB) . "\n\n";

echo "Persones en comú de les dues llistes: " . implode(", ", obtenirComuns($llistaA, $llistaB)) . "\n";
echo "Mescla de convidats sense repeticions: " . implode(", ", obtenirMescla($llistaA, $llistaB)) . "\n";
echo "Exclusius llista A: " . implode(", ", obtenirExclusius($llistaA, $llistaB)) . "\n";
echo "Exclusius llista B: " . implode(", ", obtenirExclusius($llistaB, $llistaA)) . "\n";

echo "</pre>";


/*
VERSION MILLORADA SKYNET 👍🏻

declare(strict_types=1);

function obtenirComuns(array $llistaA, array $llistaB): array
{
return array_values(array_intersect($llistaA, $llistaB));
}

function obtenirMescla(array $llistaA, array $llistaB): array
{
return array_values(array_unique(array_merge($llistaA, $llistaB)));
}

function obtenirExclusius(array $llista1, array $llista2): array
{
return array_values(array_diff($llista1, $llista2));
}

*/