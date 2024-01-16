<?php

// un tableau multi dimensionnel est un tableau qui en contient un ou plusieurs autres (deux max)
// on déclare un premier tableau
$marvelHero = array(
    // dans ce tableau sont déclarés des sous tableaux
    array('personnage'=>'Spiderman', 'nom' => 'Parker', 'prenom' => 'Peter'),
    array('personnage'=>'Iron Man', 'nom' => 'Stark', 'prenom' => 'Tony'),
    array('personnage'=>'Black Widow', 'nom' => 'Romanov', 'prenom' => 'Natasha'),
);

echo '<pre>'; var_dump($marvelHero); echo '</pre>';
echo $marvelHero[2]['prenom'];

foreach($marvelHero as $key => $value){
    echo "<ul>";
        // on ne demande à explorer $value que si elle même est un tableau (c'est à dire, Batman, Superman ou Flash) 
        // la fonction prédéfinie is_array va tester si le contenu de $value est un tableau ou non
        // si oui, on exécute le code, si non, on n'exécute pas le code du bloc d'instructions (pas de else codé explicite)

        if(is_array($value)){
            echo "<h3>$key</h3>";
            foreach($value as $key2 => $value2){
                echo "<p>$key2 : $value2</p>";
            }
        }

    echo "</ul>";
}

// seconde forme de tableau mutidimensionnel
// déclaration des sous-tableaux en associant un nom
$dcHeroes = array(
    "Batman" => array(
        'Prénom' => 'Bruce',
        'Nom' => 'Wayne'
    ),
    "Superman" => array(
        'Prénom' => 'Clark',
        'Nom' => 'Kent'
    ),
    "Flash" => array(
        'Prénom' => 'Barry',
        'Nom' => 'Allen'
    ),
);

echo '<pre>'; var_dump($dcHeroes); echo '</pre>';
// On crochète à la valeur désirée en pointant sur les deux noms associatifs
echo $dcHeroes['Superman']['Prénom'];

// affichage des valeurs du tableau multi-dimensionnel avec une foreach

// $key est l'équivalent de $indice (d'un tableau)
// $value est pour $valeur. Il faut s'habituer à eux, ils sont dans beaucoup de scripts
// pour explorer un tableau à deux dimensions, il faut imbriquer deux foreach
foreach($dcHeroes as $key => $value){
    echo "<ul>";
        // on ne demande à explorer $value que si elle même est un tableau (c'est à dire, Batman, Superman ou Flash) 
        // la fonction prédéfinie is_array va tester si le contenu de $value est un tableau ou non
        // si oui, on exécute le code, si non, on n'exécute pas le code du bloc d'instructions (pas de else codé explicite)

        if(is_array($value)){
            echo "<li>";
            // on récupère le nom de chaque tableau dans un <h3>
                echo "<h3>$key</h3>";
                // deuxième foreach pour extraire et afficher les valeurs du tableau contenu dans dcHeroes
                foreach($value as $key2 => $value2){
                    // je n'étais pas obligé de différencier $key et $key2 (et $value avec $value2). Le code aurait fonctionner de la même manière avec le même nom (mais c'est mieux de les distinguer pour l'oeil humai qui peut lire le code plus facilement)
                    echo "<p>$key2 : $value2</p>";
                }
            echo "</li>";
        }

    echo "</ul>";
}