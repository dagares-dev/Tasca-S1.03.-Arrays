<?php
/*
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.
*/
declare(strict_types=1);

function comprovarCaracter(array $paraules, string $caracter): bool
{
    foreach ($paraules as $paraula) {
        if (stripos($paraula, $caracter) === false) {
            return false; 
        }
    }
    return true; 
}

$paraules = ["martes", "miercoles", "viernes"];

echo "<h3>Exercici 3</h3>";
echo "<pre>";

print_r($paraules);

echo "\nTenen totes les paraules 'r'? ";
echo comprovarCaracter($paraules, "r") ? "true" : "false";

echo "\nTenen totes les paraules 'm'? ";
echo comprovarCaracter($paraules, "m") ? "true" : "false";

echo "</pre>";