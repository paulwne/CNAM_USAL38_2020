<?php
$retraite = 55;

$age = 7;

$différence1 = $age - $retraite;
$différence2 = $retraite - $age;




if($age > $retraite) {
    echo "Vous êtes à la retraite depuis " .$différence1 ." années"; 
}
elseif($age < $retraite) {
    if($age < 18 && $age >0){
        echo "Un peu jeune pour penser à la retraite";
    }elseif($age < 0){
        echo "Vous êtes pas né";
    }else{
        echo "Vous êtes à la retraite dans " .$différence2 ." années";}
}
else{
    echo "La retraite, c'est pour cette année";
}