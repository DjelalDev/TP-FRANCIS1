<?php

// les fonctions utilisateurs sont à coder par nos soins. Elles ne sont pas prévues par les fonctions prédéfinies PHP (une fonction qui détaille comment on ajoute ou retire un produit d'un panier. une fonction qui distingue un connecté avec des droits d'admonistrateur avec un connecté lambda etc...)

// une fonction utilisateur se déclare avec le mot clé function
// je dois le donner un nom
// celle ci attend un argument (ici, dans la parenthèse: $prenom). Mais, ce n'est pas une obligation, c'est moi qui décide si elle attend ou non un argument, voir plus bas)
function salut($prenom){
    // bloc d'instructions de la fonction, elle va afficher un message, qui récupère la valeur de l'arguement donné
    echo "Bonjour $prenom <br>";
}
// exécution de la fonction. PHP attend obligatoirement une info, un argument dans la parenthèse (car codé à la ligne 8), sinon, erreur PHP
salut('Aziz');

// exemple de fonction qui calcule une TVA (fonction simple (peu utile) vers une fonction complexe (assez pratique))

// premier cas de figure. La fonction va me calculer le prix TTC pour 100 € HT
function calculTva(){
    return 100 * 1.2;
}
echo calculTva() . ' € TTC<br>';

// second cas de figure. Ma fonction doit pouvoir me calculer le prix TTC, de n'importe quel prix, et pas seulement 100
$prix = 50;

function calculTva2($prix){
    return $prix * 1.2;
}

echo calculTva2(50) . ' € TTC<br>';

//  troisième cas de figure, ma fonction est capable de calculer le prix TTC avec une TVA de 20%, mais aussi de 5.5%

// pour que le taux soit dynamique, il ne faut pas l'inscrire en dur dans le bloc d'exécution comme pour calculTva2, mais l'envoyer en argument comme le prix
// Une fonction peut prendre plusieurs arguments
function calculTva3($prix, $taux){
    return $prix * $taux;
}

// il faudra juste envoyer le nombre exact d'arguments lorsqu'on exécute la fonction
echo calculTva3(200, 1.2) . " € TTC <br>";

// dernier cas de figure: une fonction qui ne demande pas automatiquement deux arguments à l'exécution.
// majoritairement, par défaut, c'est le taux de 20% qui sera appliqué.
// Mais de temps en temps, on doit pouvoir préciser le tx à 5.5% pour les qlq livres à la vente

// ma fonction va toujours récupéré deux arguments, sauf que le second, le taux, aura un valeur par défaut de 1.2 (20%) qui sera applicable automatiquement, tant qu'au moment de l'exécution (ligne 52), on ne rentre qu'un seul argument. Si un second argument est entré à la ligne 52, cela voudra dire qu'on veut appliquer un autre taux de TVA
function calculTva4($prix,$taux = 1.2){
    return $prix * $taux;
}

echo calculTva4(120) . " € TTC <br>";