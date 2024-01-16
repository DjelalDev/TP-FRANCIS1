<?php

$listeCouleurs = array(
    'j'=>'jaune',
    'v'=>'vert',
    'b'=>'bleu',
    'r'=>'rouge',
    'm'=>'marron'
);

echo '<pre>'; print_r($listeCouleurs); echo '</pre>';

echo $listeCouleurs['b'] .'<br>';

// récupération de la valeur dans une chaine de caractères
// avec un double quote
// avec cette syntaxe, lorsqu'on pointe sur notre indice, il ne faut pas l'ecrire entre simple quotes
echo "La couleur $listeCouleurs[b] <br>";
// avec un simple quote
// dans le cas de la concaténation, pour pointer sur l'indice, il faudra le comprendre entre simple quotes
echo 'La couleur ' . $listeCouleurs['b'] .'<br>';