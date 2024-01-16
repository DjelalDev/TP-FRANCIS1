<?php
// connexion à la bdd
$pdo = new PDO('mysql:host=localhost;dbname=employe', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );

// la requete sql stockée dans $afficheEmploye qui va récupérer la totalité des employés de la table employe
$afficheEmploye = $pdo->query(" SELECT * FROM employe");
// $employe = $afficheEmploye->fetch(PDO::FETCH_ASSOC);
// echo "<pre>"; print_r($employe) ;echo "</pre>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau employés</title>

    <!-- CDN BS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class='container'>
        <h1 class="text-center my-5">Tableau des employés</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <!-- ma boucle, autour de <th>, pour générer toutes les colonnes du tableau -->
                        <!-- j'initialise à 0 car ma première colonne à l'indice 0 -->
                        <!-- ma condition va etre bloquée par le nombre de colonnes existantes dans la table employe ( < $afficheEmploye qui pointe sur la méthode columnCount() pour connaitre le nombre de colonnes)  -->
                        <!-- columnCount est une méthode de PDOStatement, héritée du query de PDO -->
                    <?php for($i = 0; $i < $afficheEmploye->columnCount(); $i++ ){
                        // initialisation de la variable $colonne pour stocker les infos de getColumnMeta
                        // getColumnMeta est une méthode de PDOStatement, héritée du query de PDO
                        $colonne  = $afficheEmploye->getColumnMeta($i);
                        // print_r pour visualiser le contenu de getColumnMeta, contenu dans $colonne
                        /* echo "<pre>"; print_r($colonne) ;echo "</pre>"; */
                        // à l'indice ['name'] de getColumnMeta est stocké le nom de chaque colonne ?>
                        <!-- je boucle autour des <th> pour que chaque cellule crée récupère au fur et a mesure tous les noms des colonnes (en crochetant sur le bon indice ['name']) -->
                    <th><?= $colonne['name'] ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <!-- la boucle qui crée les 25 lignes necessaires pour les 25 entrées/employés en BDD -->
                <?php while($employe = $afficheEmploye->fetch(PDO::FETCH_ASSOC)){ ?>
                <tr>
                    <!-- début de la boucle qui va générer les 8 cellules pour injecter les 8 valeurs de chaque employé -->
                    <?php foreach($employe as $key => $value){
                        // if qui va permettre d'afficher le signe € dans le tableau dans la colonne salaire, après sa valeur
                        // si l'indice est == à salaire
                        if($key == 'salaire'){
                            // alors, on concatène le signe € après la valeur récupérée
                            echo "<td>$value €</td>";
                        // le else concerne tous les autres cas, quand l'indice n'est pas == à salaire
                        }else{
                            // dans ce cas, on affiche seulement la valeur récupérée
                            echo "<td>$value</td>";
                        }
                    } ?>
                </tr>
                <!-- fin de la boucle pour créer les lignes -->
                <?php } ?>
            </tbody>
        </table>
    </main>

    <!-- CDN BS JS/JQUERY -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>