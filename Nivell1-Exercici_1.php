<?php
//Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.

declare(strict_types=1);

function mostrarNombres(array $nombres): void
{
    foreach ($nombres as $nombre) {
        echo $nombre . "\n";
    }
}

$nombres = [5, 18, 33, 62, 87];

echo "<h3>Exercici 1</h3>";
echo "<pre>";
mostrarNombres($nombres);
echo "</pre>";