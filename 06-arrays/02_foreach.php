<?php

// la boucle foreach est très adaptée pour les tableaux

$listeVehicules= array('Automobile', 'Moto', 'Bateau', 'Vélo', 'Avion');
// elle permet d'afficher les valeur du tableau (affichage conventionnel) de manière intuitive.
// elle n'a pas besoin qu'on lui donne un point de départ (initialisation), de condition (le nombre d'indices/valeurs ou de l'incrémenter)

// elle a besoin d'une première info: le nom du tableau à analyser
// en second, un nom de variable/alias pour stocker les infos du tableau
// si on lui donne un alias, suivi d'une fleche avec une autre variable, la foreach va stocker respectivement, dans l'alias l'indice , puis la valeur affectée à cet indice du tableau analysé
// si on ne lui donne qu'un alias, sans etre suivi d'une fleche (exemple 2), elle va stocker dans cet alias, la valeur trouvée dans le tableau
foreach($listeVehicules as $indice => $valeur){
    echo "<p>A l'indice $indice correspond le véhicule $valeur </p>";
}
foreach($listeVehicules as $valeur){
    echo "<p>Le véhicule $valeur </p>";
}
// attention: les mots $indice et $valeur ne sont pas des mots clés. on peut les nommer comme on veut. Par contre, dans sa syntaxe obligatoire, as et => sont incontournables