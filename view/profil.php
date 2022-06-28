<?php //view
session_start();


ob_start();

// lorsqu'on clique sur connexion on arrive sur la page profil (profil.php)
$title = 'SHI NO KIJI';
$subtitle = isset($_SESSION['id'])?$_SESSION['pseudo']:'Nom de l\'auteur(e)';


echo '<main class="homeUser">
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