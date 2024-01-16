<?php
session_start();

// Sur une page connexion, affichant un bouton cliquable vers la page profil:
// Créer un session qui collecte:
// Le nom, prénom, adresse, email et civilité de l'utilisateur qui se connecte
// Dans sa page profil, récupérer ses informations pour les lui afficher avec un message de bienvenue
// débutant par:
// "Bienvenue Madame blablabla sur votre profil" , si la civilité renseignée est femme, ou
// "Bienvenue Monsieur blablabla sur votre profil" si la civilité renseignée est homme

$_SESSION['nom'] = 'Tobbal';
$_SESSION['prenom'] = 'Aziz';
$_SESSION['adresse'] = '25 rue au bout';
$_SESSION['email'] = 'aziz@gmail.com';
$_SESSION['civilite'] = 'Monsieur';

echo "<a href='03_profil.php' target='_blank'><button>Valider</button></a>";
