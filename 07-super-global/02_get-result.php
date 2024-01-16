<?php

// si je veux récupérer les infos sur cette même page (one-page), je dois entourer les instructions d'affichage d'une condition if($_GET)
// Elle permet, au premier chargement de la page de ne pas entrainer une erreur PHP (undifined array key produit etc...). Car au premier chargement de la page, l'utilisateur n'a pas encore cliqué sur le bouton, n'a pas encore envoyé d'infos dans l'URL => undifined array key logique
if($_GET){
    // Pour afficher les valeurs véhiculées dans l'URL, il faut faire appel à la superglobale $_GET
    // elle va permettre d'afficher la valeur reliée à l'indice produit ($_GET['produit']), la valeur reliée à l'indice variete etc....
    echo $_GET['produit'] . ' au ' . $_GET['variete'] . '<br>';
    echo 'Vendu au prix exceptionnel de <strong>' . $_GET['prix'] . '€ </strong>, aujourd\'hui seulement !';
}