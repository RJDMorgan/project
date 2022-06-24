<?php //view
session_start();

if(isset($_GET['deconnex']))
{
    unset($_SESSION);
    session_destroy();
};

$inscrit_priv = $inscrit->fetch();

ob_start();

$title = 'SHI NO KIJI';
$subtitle = 'Nom de l\'auteur';


echo '<main>
        désactiver le suivi des auteurs
        <br><br>
        activer/désactiver com-mess privé
        <br><br>
        déconnection- désinscription
        <br><br>
        (ainsi que toute la partie personnalisation)
        <br><br>
        bouton valider, vers l\'onglet Mon Accueil
    </main>';
    
$content = ob_get_clean();

require 'template.php';
    
// lorsqu'on clique sur inscription on arrive sur la page param