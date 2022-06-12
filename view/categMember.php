<?php //view

ob_start();

$title = 'Nom du site';
$subtitle = 'Nom de l\'auteur';

// echo '<div class="navMembre">
//         <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=1" class="categMembre">Jeux Vidéos</a>
//         <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=2" class="categMembre">Manga</a>
//         <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=3" class="categMembre">Cinéma</a>
//         <a href="index.php?page=categMember&id='.$article['user_id'].'&categ=4" class="categMembre">Séries TV</a>
//      </div>';
         
if($list_art_perso->rowCount())
{
    while($r = $list_art_perso->fetch(PDO::FETCH_ASSOC))
    {
        echo
            '<a href="index.php?page=article&id='.$r['id'].'">
                <div class="listArtMembre">
                    <p>'.$r['title'].'</p>
                    <p>Posté le : '.$r['date'].'</p>
                </div>
            </a>';
    }
}

$content = ob_get_clean();

require 'template.php';

