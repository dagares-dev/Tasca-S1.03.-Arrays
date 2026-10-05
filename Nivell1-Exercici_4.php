<?php
/*
Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
-nom
-edat
-email
-menjar favorit
*/

$alumne = [
    "nom"   => "David",
    "edat"  => 35,
    "email" => "@gmail.com",
    "menjar_favorit" => "pizza"
]; 

echo "<pre>";
foreach ($alumne as $dades => $valor) {
    echo "$dades: $valor\n";
}
echo "</pre>";