<?php


// Sur une page; créer trois boutons cliquables, avec trois formules voyages différentes (mettre leur
// prix, destination et formule(demi pension, pension complète, all-inclusive)) dans le href
// Selon le bouton cliqué, récupérer cet affichage (sur la même page pour un premier test, puis dans un
// second temps sur une autre, qui s'ouvre dans un nouvel onglet) avec une phrase sympa à lire

// je récupère les infos sur ce fichier, donc, dans l'attribut href, je ne mentionne pas de fichier landing page, j'injecte tout de suite les infos après le ?

// if(empty($_GET)) permet de faire disparaitre les boutons, après avoir cliqué sur l'un deux. On ne veut plus afficher que le résultat de la demande
if(empty($_GET)){
echo "<a href='?prix=800&destination=Strasbourg&formule=demie pension'><button>Choisir le voyage Strasbourg</button></a><br><br>";
echo "<a href='?prix=700&destination=Rennes&formule=pension complète'><button>Choisir le voyage Rennes</button></a><br><br>";
echo "<a href='?prix=1000&destination=Nice&formule=all inclusive'><button>Choisir le voyage Nice</button></a><br><br>";
}
// récupération des infos sur ce même fichier/page
// ma chaine de caractères est codée dans des doubles quotes => je ne mets pas de quotes autour de l'indice concheté ($_GET[prix]) != si ma syntaxe avait été générée dans de simples quotes, nécessitant de la concaténation ($_GET['prix'])

// ce if est codé pour le premier chargement de la page, pour éviter l'erreur PHP, undifined array key destination etc...
// au premier chargement de la page, le user n'a pas encore cliqué sur un bouton, il faut donc conditionnerl'affichage du résultat à l'envoi  des infos dans l'URL après le clic sur le bouton
if($_GET){
echo "<p>Vous avez choisi la destination de $_GET[destination], avec la formule $_GET[formule]. Cela vous coutera $_GET[prix]</p>";
}

echo '<br><hr><br>';

echo "<a href='02_get_result.php?prix=800&destination=Strasbourg&formule=demie pension' target='_blank'><button>Choisir le voyage Strasbourg</button></a><br><br>";
echo "<a href='02_get_result.php?prix=700&destination=Rennes&formule=pension complète' target='_blank'><button>Choisir le voyage Rennes</button></a><br><br>";
echo "<a href='02_get_result.php?prix=1000&destination=Nice&formule=all inclusive' target='_blank'><button>Choisir le voyage Nice</button></a><br><br>";