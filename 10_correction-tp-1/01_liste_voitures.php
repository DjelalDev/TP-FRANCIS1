<?php

// tableau multi-dimensionnel, avec des indices associatifs/nommés, pour crocheter plus facilement lorsqu'il faudra faire de l'affichage conventionnel
// On aurait pu ne pas les nommer, simplement déclarer les arrays, dont les indices auraient été auto-incrémentés
$listeVoitures = array(
    "Renault" => array('poids' => '1250', 'couleur' => 'Blanche', 'annee' => '2015', 'kilometres' => '86000'),
    "Peugeot" => array('poids' => '1300', 'couleur' => 'Rouge', 'annee' => '2018', 'kilometres' => '65000'),
    "Fiat" => array('poids' => '900', 'couleur' => 'Bleue', 'annee' => '2017', 'kilometres' => '70000'),
    "BMW" => array('poids' => '1500', 'couleur' => 'Verte', 'annee' => '2021', 'kilometres' => '25000'),
    "Mercedes" => array('poids' => '1450', 'couleur' => 'Noire', 'annee' => '2022', 'kilometres' => '20000'),
);

// affichage non conventionnel, lisible (<pre>) et plus précis (var_dump)
echo "<pre>"; var_dump($listeVoitures) ;echo "</pre><br><hr><br>";

// affichage conventionnel de qlq informations extraites du tableau
// - L'année de fabrication de la Renault
// - Le poids de la Peugeot
// - Le kilometrage de la BMW
// - La couleur de la Fiat
// Avoir nommé les indices des tableaux à l'intérieur de $listeVoitures me permet de crocheter à ces indices, plutot que de devoir aller récupérer les indices numériques donnés par défaut
// dans les premier cas, j'aurais du ecrire
// echo $listeVoitures[0]['annee'] . '<br>';
echo $listeVoitures['Renault']['annee'] . '<br>';
echo $listeVoitures['Peugeot']['poids'] . ' kg<br>';
echo $listeVoitures['BMW']['kilometres'] . ' km<br>';
echo $listeVoitures['Fiat']['couleur'] . '<br><hr><br>';

// afichage de tous les éléments du tableau avec une double foreach
foreach($listeVoitures as $key => $value){
        // on ne demande à explorer $value que si elle même est un tableau (c'est à dire, Renault, Peugeot, Fiat etc...) 
        // la fonction prédéfinie is_array va tester si le contenu de $value est un tableau ou non
        // si oui, on exécute le code, si non, on n'exécute pas le code du bloc d'instructions (pas de else codé explicite)

        if(is_array($value)){
            echo "<ul>";
                echo "<li>";
                // on récupère le nom de chaque tableau dans un <h3>
                    echo "<h3>$key</h3>";
                    // deuxième foreach pour extraire et afficher les valeurs du tableau contenu dans $listeVoitures
                    foreach($value as $key2 => $value2){
                        // je n'étais pas obligé de différencier $key et $key2 (et $value avec $value2). Le code aurait fonctionner de la même manière avec le même nom (mais c'est mieux de les distinguer pour l'oeil humain qui peut lire le code plus facilement)
                        echo "<p>$key2 : $value2</p>";
                    }
                echo "</li>";
            echo "</ul>";
        }
}