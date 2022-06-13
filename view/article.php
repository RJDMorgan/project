<?php //view

$article = $text_article->fetch();

$title = 'Nom du site';
$subtitle = 'Nom de l\'auteur(e) : '.$article['title'].'';

ob_start();

    echo
        '<nav class="navMembre">
            <a href="index.php?page=profil" class="categMembre">Mon Accueil</a>
            <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=1" class="categMembre">Jeux Vidéos</a>
            <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=2" class="categMembre">Manga/ Anime</a>
            <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=3" class="categMembre">Cinéma</a>
            <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=4" class="categMembre">Séries TV</a>
         </nav>
    
         <div class="textarticle">
            <p>'.$article['content'].'</p>
            <p>'.$article['date'].'</p>
         </div>';
         

$content = ob_get_clean();

require 'template.php';
