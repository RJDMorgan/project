<?php //view
session_start();

if(isset($_GET['deconnex']))
{
    unset($_SESSION);
    session_destroy();
}

if(isset($_POST['connexion']))
{
    if(isset($_POST['pseudo']=='pseudo' && $_POST['password']=='password'))
    {
        $_SESSION['Auth'] = true;
        $_SESSION['pseudo'] = $_POST['pseudo'];
    }
    else
    {
        $auth = 'Vos identifiants ne sont pas correctes !!';
    }
}

if(!isset($_SESSION['Auth']) || !$_SESSION['Auth'])
{
    require 'home.php';
    exit;
}

// lorsqu'on clique sur connexion on arrive sur la page profil (profil.php)
$title = 'SHI NO KIJI';
$subtitle = 'Pseudo de l\'auteur(e)';


echo '<main>
        <section>
            Présentation de l\'auteur(e) ou pas !
        </section>
        
        <section>
            Le dernier article posté
        </section>
        
        <section>
            Liste des lecteurs(trices)
        </section>
        
        <section>
            Liste des auteur(e)s suivi(e)s
        </section>
        
        <section>
            Si com privés activés-<br>
            Contacter l\'auteur(e)
        </section>
    </main>';
    
$content = ob_get_clean();

require 'template.php';