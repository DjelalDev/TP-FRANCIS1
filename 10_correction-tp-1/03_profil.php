<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de <?= $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></title>
</head>
<body>

    <main>
        <!-- condition qui permet d'afficher la civilité dans le h1 -->
        <?php if($_SESSION['civilite'] == 'Monsieur'): ?>
            <h1>Profil de Monsieur <?= $_SESSION['nom'] ?></h1>
        <?php else: ?>
            <!-- si la civilité récupérée dans le fichier session est différente de Monsieur, la chaine de caractères affichera Madame -->
            <h1>Profil de Madame <?= $_SESSION['nom'] ?></h1>
        <?php endif; ?>
        <ul>
            <!-- si la session n'existe pas, le navigateur ne génèrera pas d'erreur undifined array key nom etc.... -->
            <!-- les : après if() ; remplacent l'accollade ouvrante (et l'accolade fermante sera remplacée par endif (voir plus bas)) -->
            <?php if($_SESSION): ?>
            <li>Nom: <?= $_SESSION['nom'] ?></li>
            <li>Prénom: <?= $_SESSION['prenom'] ?></li>
            <li>Adresse: <?= $_SESSION['adresse'] ?></li>
            <li>Email: <?= $_SESSION['email'] ?></li>
            <li>Civilité: <?= $_SESSION['civilite'] ?></li>
            <?php endif; ?>
        </ul>
    </main>
    
</body>
</html>