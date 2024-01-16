<?php

$couleur = "bleu";
// la switch est une alternative au if/elseif
// elle permet de tester plusieurs cas de figure de manière plus performante (vitesse de test et donc d'affichage du résultat) que le elseif
// dans sa syntaxe, les case remplacent les if et elseif. le default remplace le else, et comme lui ne prend aucune condition
// les break sont à coder après chaque case (et default) pour permettre d'afficher le bon résultat, sinon, malgré que la condition soit vérifiée, la switch ira tester le cas suivant

switch($couleur){
    case "vert":
        echo "La couleur est vert";
        break;
    case "bleu":
        echo "La couleur est bleu <br>";
        break;
    default:
        echo "Aucune couleur n'est la bonne";
        break;
}

// équivalent de la switch en if/elseif
if($couleur  == "vert"){
    echo "La couleur est vert";
}elseif($couleur == "bleu"){
    echo "La couleur est bleu";
}else{
    echo "Aucune couleur n'est la bonne";
}