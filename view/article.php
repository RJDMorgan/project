<?php //view
session_start();

$article = $text_article->fetch();

$title = 'SHI NO KIJI';
$subtitle = 'Nom de l\'auteur(e) : <br>'.$article['title'].'';

ob_start();

    echo
        '<div class="navArtMembre">
            <nav class="navMembre">
                <a href="index.php?page=profil" class="categMembre">Mon Accueil</a>
                <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=1" class="categMembre">Jeux Vidéos</a>
                <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=2" class="categMembre">Manga/ Anime</a>
                <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=3" class="categMembre">Cinéma</a>
                <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=4" class="categMembre">Séries TV</a>
             </nav>
        
             <main class="textarticle">
                <section>
                    <p>'.$article['content'].'</p>
                    <p>'.$article['date'].'</p>
                </section>
             </main>
        </div>';
         
         
         

$content = ob_get_clean();

require 'template.php';
