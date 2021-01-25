<?php

$pays = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
    'Maroc' => 'Rabat',
    'Espagne' => 'Madrid',
    'Portugal' => 'Lisbone',
    'Angleterre' => 'Londres'
];

echo $pays ['France'];

function capitalCity(string $nom_pays)
{
    global $pays;

    if (array_key_exists)($nom_pays , $pays)) {
        return $pays[$nom_pays];
    }
    else {
        return "Capitale inconnue";
    }
}
