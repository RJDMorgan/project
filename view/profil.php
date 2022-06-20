<?php //view
session_start();

// lorsqu'on clique sur connexion on arrive sur la page profil (mon Accueil)
$title = 'SHI NO KIJI';
$subtitle = 'Pseudo de l\'auteur(e)';

$nav_site = 'nav_site';

$login = 'hidden';
$nav_categ = 'hidden';

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