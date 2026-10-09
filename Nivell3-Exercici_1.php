<?php
/*
Donat un array d'enters, fes un programa que:
Retorni cada valor de l'array elevat al cub fent servir la funció array_map().
*/

declare(strict_types=1);

function cube(int $n): int {
    return $n * $n * $n;
}

$numbers = [1, 3, 5, 9];

$result = array_map('cube', $numbers);

echo "<h2>Nivell 3</h2>";
echo "<h3>Exercici 1</h3>";

echo "<h4>Nombres<h4>";
echo "<pre>";
echo '<pre>';
print_r($numbers);
echo "<h4>Cub<h4>";
print_r($result);
echo '</pre>';