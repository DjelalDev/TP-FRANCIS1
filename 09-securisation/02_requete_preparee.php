<?php

// les requetes préparées permettent de sécuriser encore plus un site
// aujourd'hui, elles font partie de la sécurisation minimale d'un site

// requete query d'insertion en base de données
// requete INSERT INTO + nom de la table
// Dans la première parenthèse, les noms de colonnes qui vont etre impactées par de nouvelles valeurs
// Dans la deuxième, après VALUES, les valeurs récupérées du formulaires, qui vont etre envoyées dans les colonnes
// il faut donner les colonnes dans l'ordre dans lequel elles apparaissent en BDD (et ensuite, affecter les valeurs aussi dans le bon ordre)
$inscrireUser = $pdo->query(" INSERT INTO user (email, mdp) VALUES ($_POST[email], $_POST[mdp]) ");

// aujourd'hui, la requete query n'est autorisée que pour un SELECT. Pour modifier (UPDATE) ajouter (INSERT INTO) ou supprimer des infos en BDD, il faut désormais coder des requetes préparées. La query est insuffisamment sécurisée)

// la requete préparée suivante est l'équivalente de la query du dessus
// Dans la seconde parenthèse, on ne peut plus faire référence directement aux inputs du formulaire ($_POST['email'])
// la requete préparée exige dans cette parenthèse un pointeur nommé (:email)
$addUser = $pdo->prepare(" INSERT INTO user (email, mdp) VALUES (:email, :mdp) ");
// ce pointeur nommé sera ensuite lié, dans son bindValue, au champs du formulaire (':email', $_POST['email'])
// c'est comme cela que la requete préparée saura que c'est le contenu de $_POST['email'] devra etre envoyé dans la colonne email en BDD
// la requete préparée permet en plus de vérifier avant envoi en BDD le type de la valeur envoyée (PDO::PARAM_STR permet de bloquer l'envoi d'une valeur si elle n'est pas de type String)
// inversement, au moment d'envoyer un code postal en BDD, on lui appliquera PDO::PARAM_INT, pour s'assurer que ce n'est pas une chaine de caractères qui va transiter (a aussi utiliser pour un prix, un stock, tout ce qui est type nombre entier)
$addUser->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$addUser->bindValue(':mdp', $_POST['mdp'], PDO::PARAM_STR);
// en dernier, la requete préparée demande a etre exécutée
$addUser->execute();
