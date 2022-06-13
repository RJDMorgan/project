<?php //view
session_start();

if(isset($_GET['deconnex']))
{
    unset($_SESSION);
    session_destroy();
}

echo '<main>
        activer/désactiver la section présentation
        <br><br>
        désactiver le suivi des auteurs
        <br><br>
        activer/désactiver com-mess privé
        <br><br>
        déconnection- désinscription
        <br><br>
        (ainsi que toute la partie personnalisation)
    </main>';
    
// lorsqu'on clique sur inscription on arrive sur la page param