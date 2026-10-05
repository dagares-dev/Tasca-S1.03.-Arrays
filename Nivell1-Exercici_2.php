<?php
/*
Fes un programa que tingui un array indexat de 6 elements i després:
-Mostri per pantalla la mida de l’array anterior.
-Elimini un element de l’array anterior. Comprova que els índexs/claus de l'array 
estiguin normalitzats(s’han de reorganitzar els seus índexs perquè no hi hagin salts entre índexs).
-Mostri per última vegada la mida de l’array i el seu contingut.
*/


$elements = ["Bicicleta", "Pintura", "Ordenador", "Armario", "Zapatillas", "Libro"];

echo "<pre>";
echo "<h3>Exercici 2</h3>";

echo "Esta lista tiene " . count($elements) . " elementos:\n";
print_r($elements);

unset($elements[2]);
echo "\nSi quitamos el elemento número 2, la lista quedaría así:\n";
print_r($elements);

$colors = array_values($elements);
echo "\nReorganizamos la lista para no que esten enumeradas en orden: \n";
print_r($elements);

echo "</pre>";