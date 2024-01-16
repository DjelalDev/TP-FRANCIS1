<?php

// la for  permet de faire la meme chose que la while, avec une sybthaxe assez similaire.
// difference : la for prends dans sa parenthese l'intégrattié des infos ( initialisation, condition, incrementation)

for($i = 0; $i <= 5; $i++){
    // dans les accolades, le bloc d'instruction, ce qu'elle doit faire tant qu('elle est valide)
    echo "<p> Tour de boucle $i </p>";
    // difference de sybthaxe entre la ligne de dessus et dessous, les doubles quotes interprete en haut les valeurs de la variable
    // dans le cas du dessous je dois concaténé
    //  echo ' <p>Tour de boucle ' . $i . '</p>';
}

// selectyeur qui affiche les années

echo '<form>';
    echo '<select>';
        echo '<option>Selecteur l\'année</option>';

        // initialisation de la variable à la date actuelle de 2024 (avec date())
        // la condition est que ma for doit fonctionner tant que l'année est suprrrieur a 1924 (date() - 100)
        // je décrémente avec -- pour passer de 2024 a 2023 puis 2022 etc etc

        for($annee = date ('Y'); $annee >= date('Y') - 100; $annee--){
            echo '<option>' . $annee . '</option>';
        }
    echo '</select>';
echo '</form>';


// tableau avec une double for pour generer un tableau a dix ligne, chaqu'une contenant 10 cellules
echo '<table border="1" style= "border-collapse:collapse, font-size:2rem;">';
    echo '<tr>';
        for($cellule = 1; $cellule <= 10; $cellule++){
            echo '<td>' . $cellule . '</td>';
        }
    echo '</tr>';
echo '</table>';


echo '<table border="1"  style="border-collapse:collapse;font-size:2rem;">';
// une boucle for autour de tr pour generer les dix lignes
for($ligne = 0; $ligne <= 9; $ligne++){
  echo '<tr>';
//   une seconde boucle for autour des td pour generer les dix cellule de chaque lignes
   for($cellule = 0; $cellule <= 9; $cellule++){
       echo '<td style="padding:1rem">' . (10*$ligne+$cellule) + 1 . '</td>';
   }
   echo'</tr>';
}
echo '</table>';