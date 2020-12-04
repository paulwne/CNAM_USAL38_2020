<?php

/*
1 : Avancer
2 : Reculer
3 : Tourner à gauche
4 : Tourner à droite
*/


$cmd = 1;

if ($cmd == 1) {
    echo "J avance";
} elseif ($cmd == 2) {
    echo "J recule";
} elseif ($cmd == 3) {
    echo "J tourne à gauche";
} elseif ($cmd == 4) {
    echo "J tourne à droite";
} else {
    echo "Je ne fais rien";
}

switch($cmd) {
    case 1 : 
        echo "J avance";
        break;
    case 2 :
        echo "J recule"
    break;
}