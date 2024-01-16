<?php

// En PHP il sera possible d'additionner, soustraire etc...grâce aux opérateurs arithmétiques

$nombrePremier = 4;
$nombreSecond = 2;

echo $nombrePremier + $nombreSecond . '<br>';
echo $nombrePremier - $nombreSecond . '<br>';
echo $nombrePremier * $nombreSecond . '<br>';
echo $nombrePremier / $nombreSecond . '<br>';

// en plus, il y a le modulo (le reste de la division)
echo $nombrePremier % $nombreSecond . '<br>';

// et l'exponentiation (puissance deux, au carré)
echo $nombrePremier ** $nombreSecond . '<br>';

// les opérateurs d'affectation
// ici, comme avec la concaténation par affectation, la valeur d'origine est perdue ( à la ligne 24, nombrePremier ne contient plus 4 mais 6)
echo $nombrePremier += $nombreSecond ;
// je ne peux concaténer le <br> à la ligne du dessus, erreur php
echo '<br>';
echo $nombrePremier -= $nombreSecond ;
echo '<br>';
echo $nombrePremier *= $nombreSecond ;
echo '<br>';
echo $nombrePremier /= $nombreSecond ;
echo '<br>';