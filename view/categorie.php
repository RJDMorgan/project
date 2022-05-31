<?php //view

ob_start();

$title = $info_categ['name'];

echo '<div class="list_article">';
while($r = $list_art->fetch(PDO::FETCH_ASSOC))
{
    
    echo
    '<a href="index.php?page=article&profilmembre">
        <div class="info_article">
            <h2>'.$r['title'].'</h2>
            <p>Posté le : '.$r['date'].'</p>
        </div>
    </a>';
    
}

echo '</div>';

$content = ob_get_clean();

require 'template.php';