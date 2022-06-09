<?php //view

ob_start();

$title = 'NOM DU SITE';
$subtitle = $info_categ['name'];

echo '<main>';
while($r = $list_art->fetch(PDO::FETCH_ASSOC))
{
    echo
    '<a href="index.php?page=article&id='.$r['id'].'">
        <div class="info_kiji">
            <h2>'.$r['title'].'</h2>
            <p>Posté le : '.$r['date'].'</p>
        </div>
    </a>';
}

echo '</main>';

$content = ob_get_clean();

require 'template.php';