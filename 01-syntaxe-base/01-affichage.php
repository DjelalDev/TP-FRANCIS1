<?php

/*Tout code PHP doit etre ecrit dans un passage PHP <?php ?>*/
// dans un fichier php, on peut ecrire du HTML, CSS ou JS, mais l'inverse n'est pas vrai
// Dans un fichier HTML, un passage PHP ne sera pas reconnu
//  Il est conseillé de ne pas fermer un passage PHP s'il ne contient que du PHP (pas d'alternance avec du HTML). C'est conseillé car il sera plus facile à debuguer

/* ceci est un commentaire
sur plusieurs lignes*/

// pour afficher du contenu en PHP, on a besoin de l'instruction echo

echo "<h1>Mon premier fichier PHP</h1>";
// pour chaque instruction donnée, il faut la terminer avec le ; (comme en JS ou CSS). Sinon, le code sera mal lu et générera une erreur