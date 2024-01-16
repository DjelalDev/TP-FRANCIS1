<?php

$listeVehicules= array('Automobile', 'Moto', 'Bateau', 'Vélo', 'Avion');

// qlq fonctions prédéfinies liées au tableaux

// implode()
// implode "éclate" un tableau pour en afficher les valeurs.
// il prend obligatoirement un argument, le nom du tableau. Et souvent, un second argument qui va servir de séparateur pour aérer l'affichage (second argument à positionner obligatoirement en premier dans la parenthèse)
echo "<p>" . implode(' - ', $listeVehicules) . "</p>";

// count() et sizeof()
echo count($listeVehicules) . "<br>";
echo sizeof($listeVehicules) . "<br>";

// la boucle for pour explorer un tableau
// elle a besoin d'un point de départ/initialisation (on initialise à 0 car le premier indice d'un tableau est 0)
// pour la condition, on a besoin de compter le nombre d'éléments contenus dans le tableau (ou count ou sizeof).ATTENTION: il faut utiliser dans ce cas le strictement inférieur, sinon, on aura un indice supplémentaire qui entrainera un undifined array key (indice de tableau inconnu)
// on incrémente de manière classique
// on récupère les valeurs avec un echo. ATTENTION: on n'utilise pas directement $i, qui ne fait que stocker le nombre de tour de boucles. les valeurs sont à récupérer grâce à $listeVehicules[$i]

// for($i = 0; $i < sizeof($listeVehicules); $i++){
for($i = 0; $i < count($listeVehicules); $i++){
    echo "<ul>";
        echo "<li>" . $listeVehicules[$i] . "</li>";
    echo "</ul>";
}