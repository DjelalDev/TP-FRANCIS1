<?php

// les superglobales sont des variables prédéfinies mises a disposition dans le moteur de PHP pour récupérer diverses informations (voir pdf pour le lien vers la documentation de php.net)
// Ces variables stockent un ensemble d'informations/valeur dans un tableau
// Il faudra donc utiliser une syntaxe spécifique aux tableaux pour extraire ces infos

// exemple, la superglobale $_SERVER
echo "<pre>"; print_r($_SERVER); echo "</pre>";

// en crochetant à l'indice DOCUMENT_ROOT de $_SERVER, on récupère l'information qui mène vers notre htdocs
// D:/xampp/htdocs
echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
// cette information, conservée dans une constante (car elle ne devra pas varier) sera valable en local (avec xamp) mais aussi en ligne vers le htdocs de notre hébergeur
// on récupère ainsi un chemin absolu vers notre projet physique (dossiers et fichiers) que ce soit en environnement local comme en ligne
define('RACINE_SITE', $_SERVER['DOCUMENT_ROOT'] . '/monSite/');

