<h2>Infos formulaire</h2>

<?php if($_POST){ ?>
    <ul>
        <li> Email: <?php echo $_POST['email'] ?></li>
        <li> mdp: <?= $_POST['mdp'] ?></li>
    </ul>

<?php } ?>
