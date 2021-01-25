<?php

function somme_nb($nb){
    // Ex : 3 => 1+2+3 = 6, 4 => 1+2+3+4 = 10

    $somme = 0;
    for($i=1; $i<=$nb;$i++) {
        $somme = $somme + $i;
    }

    return $somme;
}

//echo somme_nb(4);

function somme_nb_pair($nb){
    // Ex : 3 => 0 + 2 = 2, 4 => 0+2+4 = 6

    $somme = 0;
    for($i=1; $i<=$nb;$i++) {
        // Test si le nombre à ajouter est pair
        if($i%2 == 0) {
            $somme = $somme + $i;
        }  
    }

    return $somme;
}

echo somme_nb_pair(56);