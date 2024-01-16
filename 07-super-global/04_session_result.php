<?php
// obligatoire en haut de chaque fichier pour que la session soit active
session_start();
?>

<?php if($_SESSION){ ?>

    <!-- exo: si vous avez le statut d'utilisateur, le h1 va afficher Bienvenue + votre prénom
    Par contre, si vous avez le statut d'administrateur, le h1 va afficher Bienvenue cher administateur + le prénom récupéré de la session -->
    <h1>Bienvenue <?php
        if($_SESSION['statut'] == 'utilisateur'){
            echo $_SESSION['prénom'];
        }else{
            echo " cher administrateur, " . $_SESSION['prénom'];
        }
        ?></h1>
    
<ul>
    <!-- pour récupérer l'affichage des infos de session, à nouveau il faut faire appel à $_SESSION, suivi de l'indice désiré -->
    <li>Prénom: <?= $_SESSION['prénom'] ?></li>
    <li>Nom: <?= $_SESSION['nom'] ?></li>
    <li>Statut: <?= $_SESSION['statut'] ?></li>
</ul>

<?php }