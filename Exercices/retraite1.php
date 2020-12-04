<?php

/*
L'âge de la retraite est fixé à 55 ans
SI l'âge fourni ($age) est supérieur à l'âge de la retraite ($retraite)
    alors
    afficher (echo) "vous êtes à la retraite depuis X années"
SINON SI l'âge fourni ($age) est inférieur à l'âge de la retraite ($retraite)
    alors   
    afficher (echo) "Il vous reste X années  avant la retraite"
SINON 
    alors
    afficher (echo) "La retraite c'est cette année"
*/

$âge = 60;
$retraite = 55;

$différences1 = $âge - $retraite;
$différences2 = $retraite - $âge;

if ($âge > 55) {
        echo "Vous êtes à la retraite depuis $différences1 années";   
} elseif ($âge < 55) {
        echo "Vous êtes à la retraite dans $différences2 années";
} else {
    echo "La retraite, c'est pour cette année";
}

?>