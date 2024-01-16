<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<main class='ms-5'>
    <!-- l'attribut method pourrait etre renseigné avec GET, mais il faudrait etre sur qu'aucune info sensible n'apparaisse dans l'URL (exemple, un mot de passe, un identifiant, le nom d'une BDD etc....)
    Ensemble, nous ne travaillerons qu'avec method='POST' -->
    <!-- C'est la méthode $_POST qui va permettre d'extraire les infos collectées dans le formulaire pour les utiliser ailleurs -->
    <!-- on pourrait avoir besoin d'un attribut supplémentaire; action (en plus de method) si les infos collectées doivent etre récupérées sur un autre fichier/page -->
    <form method="POST" class='mt-5' action='03_post_result.php'>

        <div class="mb-3 col-3">
            <label for="email" class="form-label">Adresse mail</label>
            <!-- chaque input doit avoir un name. Ce name va servir d'indice (identifiant) pour afficher la valeur véhiculée par cet input -->
            <!-- au moment de récupérer l'info, on crochètera avec $_POST a cet indice ($_POST['email']) -->
            <input type="email" name='email' class="form-control" id="email" placeholder="Votre email">
        </div>

        <div class="mb-3 col-3">
            <label for="mdp" class="form-label">Mot de passe</label>
            <input type="password" name='mdp' class="form-control" id="mdp" placeholder="Votre mot de passe">
        </div>
        <!-- on donne un nom au bouton (avec name) s'il y a plusieurs formulaires codés sur le même fichier -->
        <!-- cela permet de valider un formulaire sans déclencher tous les autres en même temps -->
        <!-- dans le if($_POST) du dessous, on ajouterait dans ce cas le nom du bouton en plus $_POST['nomDuBouton'] -->
        <button type="submit" name='' class="btn btn-primary">Envoyer</button>

    </form>

    <h2>Infos formulaire</h2>

    <?php if($_POST){ ?>
    <ul>
        <li>Email: <?php echo $_POST['email'] ?></li>
        <?php
            // la syntaxe <?= est équivalente à <?php echo
            // elle est plus rapide a générer
            // c'est celle qui est tout le temps utilisée, a condition qu'il n'y ait que de l'affichage à exécuter
        ?>
        <li>Mot de passe: <?= $_POST['mdp'] ?></li>
    </ul>
    <?php } ?>
</main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>