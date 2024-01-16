<?php
$erreur= "";
$pdo = new PDO('mysql:host=localhost;dbname=employe', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8') );

if($_POST){

    if(!isset($_POST['nom']) || !preg_match('#^[a-zA-Z-]{2,20}$#',$_POST['nom'])){
        $erreur .= 'Pour renseinger votre nom, vous pouvez utiliser les caractères alphanumériques, les signes - _ . et les espaces. Minimum 2 caractères demandés et maximum 20<br><br>';
    }else{  $addUser = $pdo->prepare(" INSERT INTO user (nom) VALUES (:nom) ");
            $addUser->bindValue(':nom', $_POST['nom'], PDO::PARAM_STR);
            $addUser->execute();}

    if(!isset($_POST['prenom']) || !preg_match('#^[a-zA-Z-]{2,20}$#',$_POST['prenom'])){
        $erreur .= 'Pour renseinger votre prenom, vous pouvez utiliser les caractères alphanumériques, les signes - _ . et les espaces. Minimum 2 caractères demandés et maximum 20<br><br>';
    }else{  $addUser = $pdo->prepare(" INSERT INTO user (prenom) VALUES (:prenom) ");
            $addUser->bindValue(':prenom', $_POST['nom'], PDO::PARAM_STR);
            $addUser->execute();}

    if(!isset($_POST['adresse']) || !preg_match('#^[a-zA-Z0-9-_ .]{2,200}$#',$_POST['adresse'])){
        $erreur .= 'Pour renseinger votre adresse, vous pouvez utiliser les caractères alphanumériques, les signes - _ . et les espaces.<br><br>';
    }else{  $addUser = $pdo->prepare(" INSERT INTO user (adresse) VALUES (:adresse) ");
            $addUser->bindValue(':adresse', $_POST['adresse'], PDO::PARAM_STR);
            $addUser->execute();}

    if(!preg_match('#^[0-9]{5}$#',$_POST['code-postal'])){
        $erreur .= 'Votre réponse ne correspond pas au format d\'un code postal<br><br>';
    }else{  $addUser = $pdo->prepare(" INSERT INTO user (code-postal) VALUES (:code-postal) ");
            $addUser->bindValue(':code-postal', $_POST['code-postal'], PDO::PARAM_STR);
            $addUser->execute();}

    if(!preg_match('#^[0-9]{10}$#',$_POST['téléphone'])){
        $erreur .= 'Votre réponse ne correspond pas au format d\'un numéro de téléphone<br><br>';
    }else{  $addUser = $pdo->prepare(" INSERT INTO user (téléphone) VALUES (:téléphone) ");
            $addUser->bindValue(':téléphone', $_POST['téléphone'], PDO::PARAM_STR);
            $addUser->execute();}

    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $erreur .= 'Votre réponse ne correspond pas au format d\'une adresse email<br><br>';
    }else{  $addUser = $pdo->prepare(" INSERT INTO user (email) VALUES (:email) ");
            $addUser->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
            $addUser->execute();}

    if(!isset($_POST['mdp']) || strlen($_POST['mdp']) < 8 || strlen($_POST['mdp']) > 30 ){
        $erreur .= 'Votre réponse ne correspond pas au format du mot de passe (minimum 8 caractères et maximum 30)<br><br>';
    }else{  $addUser = $pdo->prepare(" INSERT INTO user (mdp) VALUES (:mdp) ");
            $addUser->bindValue(':nomdpm', $_POST['mdp'], PDO::PARAM_STR);
            $addUser->execute();}

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
        
      
        <div class="mb-3 col-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name='nom' class="form-control" id="nom" placeholder="Votre nom">
        </div>

      
        <div class="mb-3 col-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name='prenom' class="form-control" id="prenom" placeholder="Votre prenom">
        </div>

        <div class="mb-3 col-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" name='adresse' class="form-control" id="adresse" placeholder="Votre adresse">
        </div>

        <div class="mb-3 col-3">
            <label for="code-postal" class="form-label">Code Postal</label>
            <input type="text" name='code-postal' class="form-control" id="code-postal" placeholder="Votre code postal">
        </div>

        <div class="mb-3 col-3">
            <label for="téléphone" class="form-label">Téléphone</label>
            <input type="text" name='téléphone' class="form-control" id="téléphone" placeholder="Votre téléphone">
        </div>


        
        <div class="mb-3 col-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name='email' class="form-control" id="email" placeholder="Votre email">
        </div>
       
        <div class="mb-3 col-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" name='mdp' class="form-control" id="mdp" placeholder="Votre mot de passe">
        </div>
      
        <button type="submit" name='' class="btn btn-primary">Envoyer</button>

    </form>
    
</main>