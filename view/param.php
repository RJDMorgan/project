<?php //view
session_start();

if(isset($_GET['deconnex']))
{
    unset($_SESSION);
    session_destroy();
}

if(isset($_POST['connexion'])
{
    if(isset($_POST['pseudo'] && $_POST['password']))
    {
        
    }
}

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
    
// lorsqu'on clique sur inscription on arrive sur la page param