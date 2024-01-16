<?php

// plusieurs fonctions prédéfinies existent déjà dans le moteur de PHP
// On en a déjà utilisé une dans le fichier 02_conditions.php, c'est isset() (qui teste si une variable existe)

// iconv_strlen versus strlen (calcul la longueur d'une chaine de caractères)
// les deux permettent de calculer la longueur d'une chaine de caractère
// strlen va tenir compte des caractères spéciaux (et permet donc de mieux gérer l'espace mémoire dédié)
// iconv_strlen ne va pas tenir compte des caractères spéciaux (nordiques, pictogrammes et idéogrammes asiatiques et autres alphabets)
// avoir a saz disposition les deux fonctions permet de reflechir et décider laquelle des deux on doit adopter (controle de l'espace mémoire, ou privilégie le strict respect de la chine de caractères)
$phrase = "Je suis un cristolien d'adoption";
echo strlen($phrase);
echo "<br>";

$phrase2 = "élèves";

echo strlen($phrase2);
echo "<br>";
echo iconv_strlen($phrase2);
echo "<br>";

// substring
// substring permet de découper une chaine de caractères
// Très utilisé sur les sites d'informations pour n'afficher que le début d'un article, suivi d'un lien Lire la suite
// elle demande trois arguments: la chaine a traiter, le point de départ et le point d'arrivée
echo substr($phrase,0,16);
echo "<br>";
// elle permet de travailler à partir de la fin de la chaine de caractères. Utile pour supprimer un pluriel non désiré selon le cas de figure. dans ce cas, on donne en valeur d'arrivée, une valeur
echo substr($phrase2,0,-1);
echo "<br>";

// date()
// permet d'afficher la date du jour, et selon les informations données en argument, le formatage sera différent (voir les deux arguments différents ci dessous pour la même date)
echo "<p>Rédigé par Aziz, le ". date("d/m/Y") ."</p>";
echo "<p>Rédigé par Aziz, le ". date("D/M/y") ."</p>";

// on peut aussi ne lui demander d'afficher que l'information pertinente (pas besoin du jour et du mois dans le footer pour le copyright). ici, je n'ai besoin que d'afficher l'année
echo "<p>&copy; - Mon site à moi - ". date("Y") ."</p>";

// empty
// Permet de savoir si une variable contient une valeur ou si elle est vide (ne pas confondre avec isset, qui teste si existe. Une variable peut exister, mais encore vide => $phrase= "" (rien entre les quotes))
// Nous servira plus tard pour savoir si un message d'erreur a été généré car le formulaire à été mal rempli
// si aucun message n'a été généré, alors la variable qui doit contenir le message d'erreur est vide, alors on peut envoyer les infos en BDD
if(!empty($phrase)){
    echo "Cette variable a bien été affecté d'un contenu <br>";
}else{
    echo "Cette variable est vide";
}