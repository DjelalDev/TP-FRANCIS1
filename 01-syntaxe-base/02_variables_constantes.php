<?php

// les variables sont considérées comme des boites de rangement, dans lesquels on stocke une ou plusieurs valeurs. Ces dernières pouvant etre modifiées

// en php, une variable se declare obligatoirement avec le signe $
// le signe = est un signe d'affectation. J'affecte la valeur aziz à la variable $prenom (ne pas confondre avec le == ou ===)
// en programmation PHP, le signe $ suivi d'un chiffre n'est pas autorisé, il va générer une erreur
// $1prenom
// Par convention, on demande à ne pas débuter le nom de la variable par un underscore (tiret du 8)
// $_prenom
// toujours par convention on évite les caractères spéciaux (accents, arobase etc...)
// $nbéléves
$prenom = "Aziz <br>";

// j'affiche la valeur de la variable
echo $prenom;

// Par convention, si le nom d'une variable est composé, on demande à utiliser du camelCase ou du snake_case
// $nombreEleves
// $nombre_eleves

// PHP est sensible à la casse. Cela veut dire qu'il faut donner la bonne syntaxe, au caractère pret, sinon la variable (ou fonction) ne sera pas reconnue (considérée comme non declarée au préalable)
// echo $prenoms;

// Comme mentionné plus en haut, la variable peut etre affectée d'une nouvelle valeur, qui ecrasera la précédente
$prenom = "Lila <br>";
echo $prenom;

$nombreEntier = 12;
$nombre_decimal = 5.5;
$booleen = TRUE;

// pour connaitre le type d'une variable en PHP, on utilise une fonction prédéfinie gettype(). cette fonction va nous permettre de d'identifier les string, integer, double, boolean et autres.

echo gettype($prenom) . "<br>";
echo gettype($nombreEntier) . "<br>";
echo gettype($nombre_decimal) . "<br>";
echo gettype($booleen) . "<br>";

// Si le boolan est TRUE, l'echo ci dessous va afficher 1 (et 0 si c'est la valeur FALSE)
echo $booleen;

// les constantes

// une constante est aussi une boite destinée à stocker une valeur, sauf qu'on ne pourra la modifier par la suite
// volontairement, pour protéger une valeur, on décidera de la stocker dans une constante, pour etre sur qu'elle ne subira pas de variations par erreur(exemple, l'URL/nom de domaine d'un site sera stocké dans une constante)

// le mot clé define permet de declarer un constante en PHP procédural (et const en PHP orienté objet)
// dans la parenthèse de define, est attendu deux parametres, dans l'ordre
// Le nom de la constante, par convention ecrite en Majuscules
// La valeur de la constante
define('VILLE', '<br>Paris');
echo VILLE;

// si je tente de réaffecter une nouvelle valeur à la constante => erreur PHP (constant VILLE already defined)
// define('VILLE', 'Créteil');

// exemple de deux constantes dites "magiques" dans la programmation PHP (elles stockent des valeurs disponibles à tout moment, notamment pour du debug)

// __FILE__ (attention au double underscore) donne l'adresse du fichier dans lequel on code
echo '<br>' .__FILE__ .'<br>';
// __LINE__ donne la ligne dans laquelle on code
echo __LINE__ ;