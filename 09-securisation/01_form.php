<?php
// la sécurisation d'un site est obligatoire (en tout cas, la sécurisation de base)

// initialisation de la variable $erreur, à vide. Qui prendra ensuite une valeur, selon le champs qui aura été mal rempli
$erreur= "";

// condition qui permet que la page n'affiche pas d'erreur PHP, au premier chargement de cette page (l'utilisateur arrive sur la page formulaire, mais n'a pas encore eu le temps de le remplir)
if($_POST){
    // les deux ! ci dessous permettent de bloquer plus rapidement et de manière plus sécurisée tout ce qui est indésirable. Il vaut mieux travailler en champs d'exclusion qui génère un message d'erreur que de tenter de coder tout ce qui est autorisé
    // le !isset() est l'équivalent du required dans l'input
    // tous les champs ne seront pas required, donc, il faut le coder quand nécessaire
    if(!isset($_POST['pseudo']) || !preg_match('#^[a-zA-Z0-9-_ .]{3,20}$#',$_POST['pseudo'])){
        $erreur .= 'Pour ce champs, vous pouvez utiliser les caractères alphanumériques, les signes - _ . et les espaces. Minimum 3 caractères demandés et maximum 20<br><br>';
    }

    // pour le champs du nom de famille, pas de required. C'est le même pregmatch que précédemment, au bon indice, en supprimant les chiffres et qlq signes
    if(!preg_match('#^[a-zA-Z-]{3,20}$#',$_POST['nom'])){
        $erreur .= 'Pour ce champs, vous pouvez utiliser les caractères de l\'alphabet, le signe - . Minimum 3 caractères demandés et maximum 20<br><br>';
    }

    // contrainte pour le code postal, sans required. Le pregmatch autorise les chiffres, au nombre de 5
    if(!preg_match('#^[0-9]{5}$#',$_POST['code-postal'])){
        $erreur .= 'Votre réponse ne correspond pas au format d\'un code postal<br><br>';
    }

    // autre syntaxe possible pour controler un code postal
    // ctype_digit controle le type de la valeur
    // strlen controlera et refusera toute longueur de chaine de caractères différente de 5
    // si l'une des deux conditions est FALSE, on génère un message d'erreur
    // if(!ctype_digit($_POST['code-postal']) || strlen($_POST['code-postal']) !== 5 ){
    //     $erreur .= 'Votre réponse ne correspond pas au format d\'un code postal';
    // }

    // contrainte pour le champs email. Il est required (on code son !isset(). On utilise ensuite la fonction prédéfinie filter_var, en lui donnant en premier argument le champs à vérifier, en second, le filtre dédié aux adresses mails)
    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $erreur .= 'Votre réponse ne correspond pas au format d\'une adresse email<br><br>';
    }

    if(!isset($_POST['mdp']) || strlen($_POST['mdp']) < 8 || strlen($_POST['mdp']) > 30 ){
        $erreur .= 'Votre réponse ne correspond pas au format du mot de passe (minimum 8 caractères et maximum 30)<br><br>';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?= $erreur ?>

<main class='ms-5'>
    <form method="POST" class='mt-5'>
        <!-- le pseudo -->
        <div class="mb-3 col-3">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" name='pseudo' class="form-control" id="pseudo" placeholder="Votre pseudo">
        </div>
        <!-- le nom de famille -->
        <div class="mb-3 col-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name='nom' class="form-control" id="nom" placeholder="Votre nom">
        </div>
        <!-- le code postal -->
        <div class="mb-3 col-3">
            <label for="code-postal" class="form-label">Code postal</label>
            <input type="text" name='code-postal' class="form-control" id="code-postal" placeholder="Votre code postal">
        </div>
        <!-- le mail -->
        <div class="mb-3 col-3">
            <label for="email" class="form-label">Adresse mail</label>
            <input type="email" name='email' class="form-control" id="email" placeholder="Votre email">
        </div>
        <!-- le mot de passe -->
        <div class="mb-3 col-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" name='mdp' class="form-control" id="mdp" placeholder="Votre mot de passe">
        </div>
        <!-- le submit -->
        <button type="submit" name='' class="btn btn-primary">Envoyer</button>

    </form>
    
</main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>