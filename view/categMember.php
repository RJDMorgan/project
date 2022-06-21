<?php //view

ob_start();

$title = 'SHI NO KIJI';
$subtitle = 'Nom de l\'auteur';

echo '<div class="artMembre">';
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
echo '</div>';

$content = ob_get_clean();

require 'template.php';

