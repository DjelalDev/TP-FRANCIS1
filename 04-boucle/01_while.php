<?php

// la while demande une initialisation à l'extérieur de la boucle
$i = 0;

// dans la parenthèse de ma while, je lui donne en argument les conditions de son exécution.
// Elle bouclera, tant que la valeur de $i sera inférieure ou égale à 5
// il faut impérativement donner une limite à son exécution, sinon, cela produit une boucle infinie qui va trop sollicité les ressources de l'ordinateur
while($i <= 5){
    // dans le bloc d'instruction de la boucle, je code d'abord ce qu'elle doit exécuter tant que la condition est respectée (la valeur de i ne doit pas dépasser 5)
    echo "Tour de boucle numéro " . $i . " --- ";
    // en dernier, dans le bloc d'instruction, j'incrémente ma boucle pour qu'elle puisse passer au tour de boucle suivant, jusqu'a atteindre la limite fixée
     $i++;
}

echo "<br><hr><br>";
// ---------- cas de figure sans les trois tirets pour le dernier tour de boucle

$i = 1;

while($i <= 6){
    // if($i <= 5){
    if($i == 6){
        echo "Tour de boucle numéro " . $i;
    }else{
        echo "Tour de boucle numéro " . $i . " --- " ;
    }
    $i++;
}
echo "<br><hr><br>";
// la do while (équivalente à la while, peu utilisée)
// comme la while, elle s'initialise à l'extérieur
 $i = 0;

//  différence, la do prend dans ses accolades le bloc d'instruction (ici, l' instruction d'affichage tant que la do while boucle, + son incrémentation)
 do{
    echo "Tour de boucle " . $i . " --- ";
    // incrémentation de 2 en  2
    $i+=2;
    // à l'extérieur du bloc d'instructions, la while, qui prend la condition
 }while($i <= 10);