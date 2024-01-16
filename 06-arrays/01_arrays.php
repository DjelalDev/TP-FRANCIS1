<?php

// la variable ci-dessous contient des prénoms, mais je nepeux en afficher un seul.
$listePrenoms = "Lila, Eva, Celal, Aziz, Inès";
// ils vont tous s'afficher en tant que chaine de caractères
echo $listePrenoms . '<br><br>';

// créer un tableau, avec le mot clé array, permet d'insérer plusieurs infos, séparées par une virgule, récupérables individuellement
$tableauPrenoms = array('Lila', 'Eva', 'Celal', 'Aziz', 'Inès', 'Yoan');
// s'il  y a trop d'éléments dans le tableau, on peut aérer le tout en le codant ainsi
// $tableauPrenoms = array(
//     'Lila',
//     'Eva',
//     'Celal',
//     'Aziz',
//     'Inès'
// );

// print_r est un affichage non conventionnel des infos (pas destinés aux visiteurs du site, mais aux dev, durant la phase de développement du site, pour mieux localiser les bugs)
print_r($tableauPrenoms);
// si le tableau contient trop d'infos, il est conseillé de l'entourer de la balise <pre> qui va aérer cet affichage
echo '<pre>'; print_r($tableauPrenoms); echo '</pre>';
// le var_dump fait aussi de l'affichage non-conventionnel, mais avec plus de détails. Donc, selon les besoins, on utilise l'un ou l'autre
echo '<pre>'; var_dump($tableauPrenoms); echo '</pre>';

// pour de l'affichage conventionnel, la seule instruction possible est echo
// pour n'afficher qu'une seule des valeurs du tableau, notre objectif de départ, il faut cibler la valeur (grâce a son indice, voir print_r ou var_dump pour connaitre l'indice)
echo '<strong>' . $tableauPrenoms[2] . '</strong><br><br>';

// autre manière de déclarer un tableau
// cette syntaxe de tableau permet d'ajouter des valeurs au fur et à mesure du code
// ce tableau est évolutif, comme pour le panier d'une boutique
$listePays[] = 'France';
$listePays[] = 'Italie';
$listePays[] = 'Turquie';
$listePays[] = 'Tunisie';
$listePays[] = 'Algérie';
$listePays[] = 'Espagne';

echo '<pre>'; var_dump($listePays); echo '</pre>';
echo $listePays[2];

$listePays[] = 'Maroc';
echo '<pre>'; var_dump($listePays); echo '</pre>';