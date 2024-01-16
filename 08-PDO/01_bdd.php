<?php

// PDO signifie PHP Data Object
// Depuis la version 5.1 de PHP, cette surcouche est direcgtement intégrée dans le moteur de PHP (auparavant, il fallait la télécharger en tant que bibliothèque)
// PDO nous permet de converser avec les bases de données. D'abord se relier à la bdd du site, pour ensuite interagir pour récupérer des infos contenues dans la BDD, les modifier, les supprimer, en ajouter etc ...

// Comme PDO est une classe, elle n'est pas modifiable en tant que telle, pour se relier à une des bases de données
// La syntaxe orientée objet m'oblige à créer un objet de cette classe, objet qui lui sera personnalisable
// ici, cet objet s'appelle $pdo, mais ce nom n'edst pas obligatoire (c'est juste un des noms communs utilisé par beaucoup de devs)
// on crée un objet d'une classe en ecrivant $bidule = new BIDULE()
// host = localhost permet de dire que l'hote de ma base de données c'est localhost (quand je travaille en local)
// dbname=employe permet de dire que parmi toutes mes bases de données, c'est à celle nommée employe que je veux me connecter
// root est une info pour le dbuser (elle sera en permanence égale à root)
// le dernier quote, vide, c'est le dbpassword (le renseigner de root pour ceux qui utilisent MAMP)
$pdo = new PDO('mysql:host=localhost;dbname=employe', 'root', '', array(
    // les informations qui suivent ne sont pas obligatoires au moment de se connecter à la BDD
    // on demande à ce que les erreurs PHP renvoyées par le navigateur soient en mode Warning
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    // on demande à ce que les données envoyées via un formulaire du site soient envoyées selon l'encodage utf8 vers la BDD
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
) );