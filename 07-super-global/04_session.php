<!-- les sessions sont indispensables à la majorité des sites -->

<!-- On crée une session pour enregistrer une informations de type temporaire
exemple: on ouvre une session pour connecter un utilisateur.
Pas besoin d'alourdir la BDD avec une table user_connecte. Ca ne sert à rien, d'autant plus qu'il va ensuite se déconnecter
exemple 2: lorsqu'un article est ajouté dans le panier, on ouvre une session panier. Pas besoin d'alourdir la BDD avec une table pour ça, on n'est oas sur qu'il va valider son panier
Par contre, s'il le valide, alors ces infos seront collectées en BDD dans une table commande. Mais tant que les produits sont dans le panier, une session est suffisante -->

<!-- lorsqu'une session est crée, les infos sont enregistrées au fur et a mesure dans un fichier sur le serveur, dans un dossier tmp (dossier tmp sur mon ordi, dans C:, ou pour un site en ligne, dan sle dossier tmp de l'hébergeur) -->

<!-- les sessions sont aussi indispensables pour me permettre de naviguer de page en page sur le site sans perdre mes infos
Sans; en passant sur une autre page, mes infos de connexion seraient perdues (mon pseudo, mon mail, mon mdp), je devrais me reconnecter
Sans; si j'ajoute un article sur mon panier, en changeant de page, pour voir un autre article, mon pécédent article ne serait plus référencé dans le panier -->

<!-- les sessions sont indispensables -->

<?php
// Il y a obligation, en haut du fichier, avant tout autre code (doctype, traitement PHP) à déclarer un session_start(). Sinon, la session ne peut fonctionner
session_start();

// pour conserver une info dans une session, il faut faire appel à $_SESSION, qui va enregistrer une valeur, affiliée à un indice (syntaxe arrays)
$_SESSION['prénom'] = "Aziz";
$_SESSION['nom'] = "Tobbal";
$_SESSION['statut'] = "indésirable";

?>

<!-- lien cliquable vers autre fichier pour afficher les infos de la session -->
<a href="04_session_result.php"><button>Voir profil</button></a>

<!-- ATTENTION: n'essayez pas d'écraser des infos dans le fichier session par d'autres. Supprimez l'ancien, et générez une nouvelle session -->