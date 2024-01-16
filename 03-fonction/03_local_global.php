<?php

// en programmation, il faut distinguer l'espace global de l'espace local
// ce qui est declaré dans l'un, ne sera pas reconnu dans l'autre, sauf à utiliser une syntaxe spécifique pour faire la jonction entre les deux espaces

// -------------espace global -------------

// ---------- du code-----------

// function maFonction(){
    // -----------espace local----
    // le bloc d'instruction de ma fonction
    // -----------espace local----
// }

// ------ du code--------------

// -------------espace global--------

// passer du global vers le local

$pays = "France";

function affichePays(){
    // si je n'utilise pas le mot clé global, PHP va me retourner une erreur, undifined variable $pays
    // le mot clé global va servir d'importateur pour relier le global au local
    global $pays;
    echo $pays . '<br>';
}

affichePays();

// passer du local au global

function afficheJour(){
    $jour = "vendredi";
    // le mot clé return va servir d'exportateur pour que le contenu de $jour puisse etre reconnu dans l'espace global. Sans, rien ne s'affiche
    return $jour;
    // le code ecrit après un return ne s'exécutera pas.
    // le return stoppe le script
    echo "Demain, c'est samedi";
}

echo afficheJour();