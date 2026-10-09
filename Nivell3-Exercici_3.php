<?php
/*
Donat un array d’enters, fes un programa que ens retorni 
la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().
*/

declare (strict_types=1);


function isPrime(int $n): bool {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

function getsum(int $total, int $n): int {
    return $total + $n;
}

$numbers = [2, 4, 5, 9, 11, 13, 14, 18, 23, 29, 33,];


$primes = array_filter($numbers, 'isPrime');
$result = array_reduce($primes, 'getsum', 0);

echo "<h2>Nivell 3</h2>";
echo "<h3>Exercici 3</h3>";

echo "Lista de números: " . implode(', ', $numbers) . "<br>";
echo "Números primos de la lista: " . implode(', ', $primes) . "<br>";
echo "Suma de primos: " . $result . "<br>";