<?php

$prenom = "Aziz";
$nom = "Tobbal";

// première manière de concaténer, pas très utilisée, avec une virgule
echo "Je suis " , $prenom , " " , $nom , '<br>';

// seconde manière, très fréquente, avec des points
echo "Je suis " . $prenom . " " . $nom . '<br>';

// les doubles quotes permettent d'interpréter les variables, et d'afficher les valeurs
echo "Je suis $prenom $nom <br>";
// Les simples quotes, non, on devra utiliser la concaténation
echo 'Je suis $prenom $nom <br>';

// la concaténation par affectation
// la concaténation par affectation permet de concaténer plus simplement deux valeurs, sans avoir à les déclarer les deux au préalable
$nombre = 45;
$nombre .= 15;
// la ligne au dessus est l'équivalent de $nombre = $nombre . 15
echo $nombre . '<br>';

// Attention, cette affectation a définitivement ecrasé la valeur 45 d'origine. Il faut etre sur que l'on en aura plus besoin
// De manière globale, elle est évitée pour cdtte raison. Les dev préféreront avoir une syntaxe plus longue comme en dessous, avec une nouvelle variable, qui permettra d'afficher 45 si besoin
// $nombreDeux = $nombre . 15;
// echo $nombreDeux . '<br>';