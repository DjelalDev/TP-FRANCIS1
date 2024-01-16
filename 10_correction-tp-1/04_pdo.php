<?php

/* Se connecter à la base de données employe
Récupérer toutes les informations concernant l'employé qui a le prénom Damien, et afficher les
informations le concernant
Afficher dans une liste tous les employés travaillant pour le service commercial, en les rangeant par
ordre alphabétique (nom de famille) */

// la connexion à la BDD employe
$pdo = new PDO('mysql:host=localhost;dbname=employe', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );

// la requete sql qui va cibler les données qui m'interessent (grâce à la méthode query de PDO)
$afficheEmploye = $pdo->query(" SELECT * FROM employe WHERE prenom = 'damien' ");
// $employe va stocker dans un tableau les informations extraites grâce à fetch (méthode de PDO Statement)
$employe = $afficheEmploye->fetch(PDO::FETCH_ASSOC);

// query cible des infos. fetch va permettre d'extraire ces mêmes infos. et echo permettre leur affichage si besoin

// un print_r rapide pour s'assurer que mon query et fetch ont été bien codés
echo "<pre>"; print_r($employe) ; echo "</pre>";

// je récupère des infos ciblées concernant l'employé Damien en crochetant à l'indice désiré
echo "<p>Damien travaille dans le service $employe[service]</p>";

// boucle qui va afficher tous les employés, en les affichant par odre alphabétique

$afficheEmployes = $pdo->query(" SELECT * FROM employe WHERE service = 'commercial' ORDER BY nom ");


 ?>

<!-- boucle while pour afficher le résultat ciblé -->


<ul>
    <?php while($employes = $afficheEmployes->fetch(PDO::FETCH_ASSOC)): ?>
        <li>L' employé(e) <?= $employes['nom'] . " " . $employes['prenom']  ?> travaille au service commercial pour un salaire de <?= $employes['salaire'] ?> €</li>
    <?php endwhile; ?>
</ul>

<!-- count($employes) va me donner le nombre de salariés concernés par le service commercial. ATTENTION, cet information n'est disponible qu'après la boucle while. C'est pour cela qu'on positionne ce paragraphe en dessous -->


