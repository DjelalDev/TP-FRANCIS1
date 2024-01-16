<?php

$pdo = new PDO('mysql:host=localhost;dbname=employe', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );

// la méthode query permet d'aller fouiller dans la base de données connectée au site

$afficheEmploye = $pdo->query("SELECT * FROM employe WHERE prenom = 'damien' ");

echo '<pre>'; print_r($afficheEmploye); echo '</pre>';

// la méthode query ne récupère pas les infos (voir le résultat du print_r juste au dessus). La méthode query permet de cibler ces infos via une requete
// C'est la méthode fetch, en complément de query qui va permettre de récupérer ce qui a été ciblé

// fetch appartient à une sous classe de PDO, qui s'appelle PDOstatement
// fetch(PDO::FETCH_ASSOC) permet de récupérer les valeurs en crochetant sur les noms des colonnes en BDD
// fetch(PDO::FETCH_NUM) permet de récupérer les valeurs en crochetant sur les indices des colonnes en BDD
// fetch(PDO::FETCH_BOTH) permet de récupérer les valeurs en crochetant ou sur les indices ou sur les noms des colonnes en BDD
// souvent, c'est le assoc qui est utilisé car c'est plus pratique d'appeler via les noms des colonnes, que l'on connait, plutot que sur un indice qu'il faudra aller vérifier fréquemment
// le both est pratique, sauf si on veut utiliser une boucle, les infos arriveront en double (bof bof pour un tableau ou un affichage conventionnel)
//  :: en syntaxe orientée objet veut dire que l'on fait appel a une constante de la classe PDO
$employe = $afficheEmploye->fetch(PDO::FETCH_ASSOC);

echo '<pre>'; print_r($employe); echo '</pre>';

// pour afficher les infos de manière conventionnelle, ces dernières étant stockées dans un tableau (voir le print_r du dessus) il nous faudra crocheter à l'indice du tableau désiré
echo "<p>L'employé prénommé $employe[prenom] a un salaire de $employe[salaire]</p>";

foreach($employe as $key => $value ){
    echo "<ul>";
        echo "<li>$key : $value</li>";
    echo "</ul>";
}
 
echo '<hr>';
// le même affichage, avec une boucle, sans récupérer l'identifiant de l'employé

foreach($employe as $key => $value ){
    echo "<ul>";
        if($key != 'idEmploye'){
        echo "<li>$key : $value</li>";
        }
    echo "</ul>";
}

// -----------------------------------------------
// boucle while pour explorer une table

// requete query pour affecter dans $afficheEmploye toutes les informations concernant les dix premiers employés enregistrés dans la table employe
$afficheEmploye = $pdo->query(" SELECT * FROM employe LIMIT 10 ");

// liste ordonnée
echo "<ol>";
// la while va prendre en argument le fetch, stocké dans $employe
    while($employe = $afficheEmploye->fetch(PDO::FETCH_ASSOC)){
        // je crochète aux indices désirés pour récupérer les valeurs
        echo "<li>L'employé $employe[nom] travaille pour le service $employe[service] pour un salaire de $employe[salaire] </li>";
        // echo "<li>L'employé $employe[nom] travaille pour le service $employe[service]" . ' pour un salaire de ' . $employe['salaire'] .'</li>';
    }
    // la while fait le job, mais en l'état, seulement pour les valeurs. Elle ne me permet pas de récupérer les indices aussi simplement que la foreach
echo "</ol>";